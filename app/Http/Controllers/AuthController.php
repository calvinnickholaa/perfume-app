<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\CustomerRegistered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function index()
    {
        return view('/Auth/login');
    }
    public function register_page()
    {
        return view('/Auth/register');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'no_telp' => 'required|string|max:15',
        //     'email' => 'required|string|email|max:255|unique:users',
        // ]);

        $randomPassword = Str::random(8);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'role' => 2,
            'password' => Hash::make($randomPassword), // Hash password
        ]);

        // Kirim email dengan password yang digenerate
        Mail::to($user->email)->send(new CustomerRegistered($user, $randomPassword));

        return redirect('/')->with('success', 'Registrasi berhasil. Silakan cek email Anda untuk password.');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial
        $credentials = $request->only('email', 'password');

        // Coba login dengan kredensial yang diberikan
        if (Auth::attempt($credentials)) {
            // Jika berhasil, redirect ke dashboard atau halaman lain
            return redirect()->intended('dashboard')->with('success', 'Login berhasil!');
        } else {
            // Jika gagal, kembalikan ke halaman login dengan pesan error
            return redirect('/')->with('error', 'Email atau password salah!');
        }
    }
}
