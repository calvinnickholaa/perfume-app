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
                        <h5 class="card-title text-left">Silakan Registrasi</h5>
                        <form action="/register" method="POST">
                            @csrf
                            <div>
                                <label for="name">Nama:</label>
                                <input type="text" name="name" id="name" required>
                            </div>

                            <div>
                                <label for="no_telp">Nomor Telepon:</label>
                                <input type="text" name="no_telp" id="no_telp" required>
                            </div>

                            <div>
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" required>
                            </div>

                            <button type="submit">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.css"></script>
</body>

</html>
