<?php

use Illuminate\Support\Facades\Route;
use App\Models\Layanan;
use App\Models\Artikel;
use App\Models\Galeri;

Route::get('/', function () {return view('home');});

Route::view('/profil', 'profil')->name('profil');

Route::view('/layanan', 'Layanan.index')->name('Layanan');

Route::view('/artikel', 'artikel.index')->name('artikel');
Route::view('/artikel/{id}', 'artikel.show')->name('artikel.show');

Route::view('/galeri', 'galeri.index')->name('galeri');
Route::view('/galeri/{id}', 'galeri.show')->name('galeri.show');

Route::post('/penilaian', function (Request $request) {
    $data = $request->validate([
        'nama' => ['required', 'string', 'max:255'],
        'rating' => ['required', 'integer', 'min:1', 'max:5'],
        'komentar' => ['required', 'string', 'max:2000'],
    ]);

    Penilaian::create($data);

    return redirect('/#penilaian')
        ->with('success', 'Penilaian berhasil dikirim!');
})->name('penilaian.store');
