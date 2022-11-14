<?php

use App\Http\Controllers\Api\DataFormController;
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
    return view('data');
});

Route::get('/api/data', [DataFormController::class, 'index'])->name('api.data');
Route::get('/api/data/{id}', [DataFormController::class, 'show'])->name('api.data.show');
Route::post('/api/data/store', [DataFormController::class, 'store'])->name('api.data.store');
Route::put('/api/data/update/{id}', [DataFormController::class, 'update'])->name('api.data.update');
Route::delete('/api/data/delete/{id}', [DataFormController::class, 'destroy'])->name('api.data.delete');
