<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/c/cf/Logo_BNN.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SISTEM LAYANAN BNN PROVINSI JAWA TENGAH | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
        font-family:"Poppins", sans-serif;
        cursor:pointer;
        background:url('photo/bnnjateng.jpg') no-repeat;
        background-size: cover;
        background position: center;
    }

    .login-box{
        width:500px;
        border:solid 1px;
        padding: 30px;
        background: #063970;
        color: #fff;
    }

    .input-box input::placeholder {
        color: #fff;
    }

    .input-box i{
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%)
        font-size:20px;
    }

    .a h1{
        font-size: 33px;
        text-align:center;
        justify-content:center;
    }

    .a h2{
        font-size: 25px;
        text-align:center;
    }

    form div {
        margin-bottom: 15px;
    }

</style>
</body>

<body>

    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if (session('username'))
            <div class="alert alert-danger">
                {{session('message')}}
            </div>
        @endif

        <div class="login-box">
            <form action="" method="post">
                @csrf

                <div class="a">
                    <h1><img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/Logo_BNN.png" alt="BNN" style="width: 120px;"></h1>
                    <h1><strong>Sistem Layanan (SILA)</strong></h1>
                    <h2>BNN PROVINSI JAWA TENGAH</h2>
                </div>

                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" class="save"> Ingat Saya</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
                <div>
                    <p>Tidak punya Akun? <a href="register">Daftar</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
