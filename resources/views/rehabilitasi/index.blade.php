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
        height: 150vh;
        box-sizing: border-box;
        font-family:"Poppins", sans-serif;
        cursor:pointer;
        background:url('photo/bnnjateng.jpg') no-repeat;
        background-size: cover;
        background position: fixed;
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

        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif

        <div class="register-box">
            <form action="" method="post">
                @csrf

                <div class="a">
                    <h1>PENDAFTARAN LAYANAN</h1>
                </div>

                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
                </div>

                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" name="umur" id="umur" class="form-control" value="{{ old('umur') }}">
                </div>

                <div class="mb-3">
                    <label for="j_kel" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="j_kel" id="j_kel" class="form-control" value="{{ old('j_kel') }}">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Asal</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat') }}">
                </div>

                <div class="mb-3">
                    <label for="tanggal_pelaksanaan" class="form-label">Tanggal Pelaksanaan</label>
                    <input type="date" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" class="form-control" value="{{ old('tanggal_pelaksanaan') }}">
                </div>

                <div class="mb-3">
                    <label for="kontak" class="form-label">Kontak</label>
                    <input type="text" name="kontak" id="kontak" class="form-control" value="{{ old('kontak') }}">
                </div>

                <div class="mb-3">
                    <label for="lokasi_pelaksanaan" class="form-label">Lokasi Pelaksanaan</label>
                    <input type="text" name="lokasi_pelaksanaan" id="lokasi_pelaksanaan" class="form-control" value="{{ old('lokasi_pelaksanaan') }}">
                </div>

                <div class="mb-5">
                    <label for="alamat" class="form-label">Pilih Layanan</label>
                    <select name="layanan_id" class="form-select">
                        @foreach ($layanan as $data)
                            <option value="{{ $data->id }}" {{ old('layanan_id') == $data->id ? 'selected' : '' }}>{{$data->nama_layanan}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary form-control">Daftar Layanan</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
