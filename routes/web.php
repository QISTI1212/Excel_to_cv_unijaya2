<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/upload', 'UploadController@showUploadForm')->name('upload.form');
// Route::post('/upload', 'UploadController@uploadFile')->name('upload.file');
Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);


require __DIR__.'/auth.php';
