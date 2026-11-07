<?php

use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/ruangan');

Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
Route::get('/ruangan/{id}', [RuanganController::class, 'show'])->name('ruangan.show');
Route::get('/peminjaman/create/{id}', [RuanganController::class, 'createPeminjaman'])->name('peminjaman.create');
