@extends('layouts.mainlayout')

@section('title', 'Profile')

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
@endsection
