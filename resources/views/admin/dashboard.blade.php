@extends('layouts.admin')

@section('content')
<h2 class="mb-4 text-primary">Dashboard Admin</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Total User</h5>
                <p class="card-text">123 pengguna</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Transaksi Hari Ini</h5>
                <p class="card-text">15 transaksi</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Notifikasi Baru</h5>
                <p class="card-text">4 notifikasi</p>
            </div>
        </div>
    </div>
</div>
@endsection
