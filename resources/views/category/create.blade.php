@extends('layouts.mainlayout')

@section('title', 'Tambah Kategori')

@section('content')

    <h1>Tambah Kategori Baru</h1>

    <div class="mt-5 w-50">
        <form action="{{ route('kategori-layanan.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="layanan_code" class="form-label">Kode Layanan</label>
                <input type="text" name="layanan_code" id="layanan_code" class="form-control" placeholder="Kode Layanan">
            </div>

            <div class="mb-3">
                <label for="nama_layanan" class="form-label">Nama Layanan</label>
                <input type="text" name="nama_layanan" id="nama_layanan" class="form-control" placeholder="Nama Kategori">
            </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection