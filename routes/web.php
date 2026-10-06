<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return redirect()->route('laporan.form');
});

Route::get('/laporan/form', [LaporanController::class, 'form'])
    ->name('laporan.form');

Route::post('/laporan', [LaporanController::class, 'store'])
    ->name('laporan.store');

Route::get('/laporan/konfirmasi', function () {
    return redirect()->route('laporan.form');
})->name('laporan.konfirmasi');

Route::get('/laporan', [LaporanController::class, 'index'])
    ->name('laporan.index');