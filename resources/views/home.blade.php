@extends('layouts.main')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="mb-3 text-primary">Selamat Datang di NeoPulsa</h1>
    <p class="lead">Layanan konter pulsa digital terpercaya untuk kebutuhan komunikasi dan top-up harian kamu!</p>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Pulsa & Paket Data</h5>
                    <p class="card-text">Tersedia semua operator: Telkomsel, Indosat, XL, Axis, Tri, dan lainnya.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Token PLN & Top-Up eWallet</h5>
                    <p class="card-text">Isi token listrik & saldo e-wallet (OVO, GoPay, DANA, ShopeePay) langsung dari rumah.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Cepat, Mudah, Aman</h5>
                    <p class="card-text">Transaksi 24 jam dengan sistem otomatis. Data pelanggan aman & terpercaya.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <a href="/layanan" class="btn btn-primary btn-lg">Lihat Layanan Kami</a>
    </div>
</div>
@endsection
