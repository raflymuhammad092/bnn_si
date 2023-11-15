@extends('layouts.mainlayout')

@section('title', 'Kategori')

@section('content')
    <h1>Daftar Kategori</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <div class="mt-4 d-flex justify-content-end">
        <a href="{{ route('kategori-layanan.create')}}" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Layanan</th>
                    <th>Nama Layanan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($layanan as $item)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->layanan_code}}</td>
                <td>{{$item->nama_layanan}}</td>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
