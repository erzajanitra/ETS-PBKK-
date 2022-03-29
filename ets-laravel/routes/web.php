<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/input', [FormController::class, 'input']); 
Route::post('/proses', [FormController::class, 'proses']);


use App\Http\Controllers\RecordController;
Route::get('/record', [RecordController::class, 'index']);
Route::get('/record/{record:slug}', [RecordController::class, 'content']);

use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/dokter', [DokterController::class, 'index']);


require __DIR__.'/auth.php';
