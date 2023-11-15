@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')

    <h1>Selamat datang, {{Auth::user()->username}}</h1>
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data layanan">
                <div class="row">
                    <div class="col-6"><i class="bi bi-diamond-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Pengajuan</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-task"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Kategori</div>
                        <div class="card-count">{{$category_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-person"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">User</div>
                        <div class="card-count">{{$user_count}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2>Data Pengajuan</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Layanan</th>
                    <th>Tanggal Pelaksanaan</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Lokasi Pelaksanaan</th>
                    <th>Kontak</th>
                    <th>Tanggal Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuan as $item)
                <tr>
                    <td style="text-align: center">{{ $loop->iteration}}</td>
                    <td style="text-align: center">{{ $item->nama }}</td>
                    <td style="text-align: center">
                        @if ($item->layanan)
                            {{ $item->layanan->nama_layanan }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td style="text-align: center">{{ $item->tanggal_pelaksanaan }}</td>
                    <td style="text-align: center">{{ $item->umur }}</td>
                    <td style="text-align: center">{{ $item->j_kel }}</td>
                    <td style="text-align: center">{{ $item->alamat }}</td>
                    <td style="text-align: center">{{ $item->lokasi_pelaksanaan }}</td>
                    <td style="text-align: center">{{ $item->kontak }}</td>
                    <td style="text-align: center">{{ $item->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

