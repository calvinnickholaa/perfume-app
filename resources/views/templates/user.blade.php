@extends('layouts.app')

@section('content')
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Vascomm Logo">
                </a>
                <form class="form-inline my-lg-0 my-2">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari di Vascomm" aria-label="Search">
                    <button class="btn btn-outline-success my-sm-0 my-2" type="submit">Cari</button>
                </form>
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="">Masuk</a>
                    <a class="nav-link" href="">Daftar</a>
                </div>
            </nav>
        </div>
    </header>
@endsection
