<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/c/cf/Logo_BNN.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULIR PENDAFTARAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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

    .register-box{
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
        font-size: 40px;
        text-align:center;
    }

    form div {
        margin-bottom: 15px;
    }
</style>
</body>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
        @endif

        @if (session('status'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

        <div class="register-box">
            <form action="" method="post">
                @csrf
                <div class="a">
                    <h1>PENDAFTARAN LAYANAN</h1>
                </div>
                <div>
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div>
                    <label for="umur" class="form-label">Umur</label>
                    <input type="umur" name="umur" id="umur" class="form-control">
                </div>
                <div>
                <div>
                    <label for="alamat" class="form-label">Alamat Asal</label>
                    <input type="alamat" name="alamat" id="alamat" class="form-control">
                </div>
                <div>
                    <label for="alamat" class="form-label">Kontak</label>
                    <input type="kontak" name="kontak" id="kontak" class="form-control">
                </div>
                <div>
                    <label for="alamat" class="form-label">Layanan</label>
                        <select name='agama'>
                          <option value='rehabilitasi'>Rehabilitasi</option>
                          <option value='pengaduan'>Pengaduan</option>
                          <option value='sosialisasi'>Sosialisasi</option>
                          <option value='tesurin'>Tes Urin</option>
                        </select>
                </div>
                    <button type="submit" class="btn btn-primary form-control">Daftar Layanan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
