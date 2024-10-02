<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row my-4">
            <div class="col-md-6">
                <img src="images/backgroundLogin.png" class="img-fluid rounded-top" alt="">
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body align-content-lg-center">
                        <h5 class="card-title text-left">Selamat Datang Admin</h5>
                        <p style="opacity: 50%">Silahkan masukkan email atau nomor telepon dan password
                            Anda untuk mulai menggunakan aplikasi</p>
                        <form action="/login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email / Nomor Telpon</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Contoh: admin@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Masukkan Password">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.css"></script>
</body>

</html>
