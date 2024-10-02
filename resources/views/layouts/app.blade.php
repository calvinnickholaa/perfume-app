<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vascomm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"   href="#">
                <img src="images/logo.png"   alt="Vascomm Logo">
            </a>
            <div class="col-md-6">
                <input class="form-control" type="search" placeholder="Cari di Vascomm" aria-label="Search">
            </div>
            <div class="navbar-nav">
                <a type="button" href="/login-page" class="btn btn-outline-primary mx-2">Masuk</a>
                <a class="btn btn-primary" href="/register-page" type="submit">Daftar</a>
            </div>
        </div>
    </nav>
</header>

<body>
    <div id="app">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
