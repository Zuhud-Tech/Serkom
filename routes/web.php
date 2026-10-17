<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Layanan;
use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\Penilaian;

Route::get('/', function () {return view('home');});

Route::view('/profil', 'profil')->name('profil');

Route::view('/layanan', 'Layanan.index')->name('Layanan');

Route::view('/artikel', 'artikel.index')->name('artikel');
Route::view('/artikel/{id}', 'artikel.show')->name('artikel.show');

Route::view('/galeri', 'galeri.index')->name('galeri');
Route::view('/galeri/{id}', 'galeri.show')->name('galeri.show');

Route::post('/penilaian', function (Request $request) {
    $request->validate([
        'nama' => 'required|string|max:100',
        'rating' => 'required|integer|min:1|max:5',
        'komentar' => 'required|string|max:1000',
    ]);

    Penilaian::create([
        'nama' => $request->nama,
        'rating' => $request->rating,
        'komentar' => $request->komentar,
    ]);

    return redirect(url('/').'#penilaian')
        ->with('success', 'Penilaian berhasil dikirim!');
})->name('penilaian.store');
