<?php

use Illuminate\Support\Facades\Route;
use App\Models\LogActivity;

Route::get('/admin/log', function () {
    $logs = LogActivity::latest()->get();
    return view('admin.log', compact('logs'));
});


Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});


Route::get('/admin', function () {
    LogActivity::create([
        'user' => 'Admin', 
        'activity' => 'Mengakses halaman admin',
        'ip' => request()->ip(),
    ]);

    return view('admin.dashboard');
});