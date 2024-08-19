<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\GalleryVideoController;

Route::get('/', HomeController::class)->name('home');

Route::controller(PostController::class)->group(function () {
    Route::get('/berita', 'index')->name('berita');
    Route::get('/berita/{post:slug}',  'show')->name('berita.show');
});

Route::controller(GalleryImageController::class)->group(function () {
    Route::get('/galeri-foto', 'index')->name('galeri.foto');
    Route::get('/galeri-foto/{galleryImage:slug}',  'show')->name('galeri.foto.show');
});

Route::controller(GalleryVideoController::class)->group(function () {
    Route::get('/galeri-video', 'index')->name('galeri.video');
    Route::get('/galeri-video/{galleryVideo:slug}',  'show')->name('galeri.video.show');
});

Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/tugas-dan-fungsi', function () {
        return view('pages.profil.tugas-dan-fungsi');
    })->name('tugas-dan-fungsi');
    Route::get('/profil-organisasi', function () {
        return view('pages.profil.profil-organisasi');
    })->name('profil-organisasi');
    Route::get('/struktur-organisasi', function () {
        return view('pages.profil.struktur-organisasi');
    })->name('struktur-organisasi');
    Route::get('/informasi-pejabat', function () {
        return view('pages.profil.informasi-pejabat');
    })->name('informasi-pejabat');
    Route::get('/lokasi-kantor', function () {
        return view('pages.profil.lokasi');
    })->name('lokasi');
});


Route::get('/aplikasi', function () {
    return view('pages.aplikasi.index');
})->name('aplikasi');

Route::get('/publikasi', function () {
    return view('pages.publikasi.index');
})->name('publikasi');

Route::get('/publikasi-perencanaan/rencana-strategis', function () {
    return view('pages.publikasi.perencanaan.index');
})->name('publikasi.rencana');
Route::get('/publikasi-perencanaan/rencana-rpsda', function () {
    return view('pages.publikasi.perencanaan.rpsda');
})->name('publikasi.rpsda');
Route::get('/publikasi-perencanaan/pola-wilayah-sungai', function () {
    return view('pages.publikasi.perencanaan.pola');
})->name('publikasi.pola');

Route::get('/publikasi-kinerja/lakin', function () {
    return view('pages.publikasi.kinerja.index');
})->name('publikasi.kinerja.lakin');
Route::get('/publikasi-kinerja/laporan', function () {
    return view('pages.publikasi.kinerja.laporan');
})->name('publikasi.kinerja.laporan');

Route::get('/publikasi/proyek', function () {
    return view('pages.publikasi.proyek');
})->name('publikasi.proyek');



Route::get('/info-publik', function () {
    return view('pages.info-publik.index');
})->name('info-publik');
Route::get('/info-publik/aset', function () {
    return view('pages.info-publik.aset');
})->name('info-publik.aset');
Route::get('/info-publik/tkpsda', function () {
    return view('pages.info-publik.tkpsda');
})->name('info-publik.tkpsda');
Route::get('/info-publik/pelayanan', function () {
    return view('pages.info-publik.pelayanan');
})->name('info-publik.pelayanan');
Route::get('/info-publik/maklumat', function () {
    return view('pages.info-publik.maklumat');
})->name('info-publik.maklumat');

Route::get('/sistem-info', function () {
    return view('pages.sistem-info.index');
})->name('sistem-info');

Route::get('/faq', function () {
    return view('pages.faq.index');
})->name('faq');

Route::get('/pencarian', [SearchController::class, 'index'])->name('search');
