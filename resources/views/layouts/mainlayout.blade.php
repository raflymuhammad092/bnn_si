<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/c/cf/Logo_BNN.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISTEM LAYANAN BNN PROVINSI JAWA TENGAH | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/Logo_BNN.png" alt="logo" class="logo" width="60" height="60">
                <a class="navbar-brand" href="#">Sistem Layanan BNN Provinsi Jawa Tengah</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo01">

                    @if (Auth::user()->role_id == 1)
                        <a href="dashboard" @if(request()->route()->uri == 'dashboard') class='active'
                        @endif>Dashboard</a>
                        <a href="kategori-layanan" @if (request()->route()->uri == 'kategori-layanan') class='active'
                            @endif>Kategori</a>
                        <a href="users" @if (request()->route()->uri == 'users') class='active'
                            @endif>Users</a>
                        <a href="logout">Logout</a>

                    @else
                        <a href="profile">Profile</a>
                        <a href="rehabilitasi">Layanan</a>
                        <a href="logout">Logout</a>
                    @endif
                </div>

                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
