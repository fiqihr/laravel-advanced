<?php

use App\Http\Controllers\DataPersonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Models\DataPerson;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data_person', [DataPersonController::class, 'index'])->name('data_person');

Route::resources(['product' => ProductController::class]);
Route::resources(['transaction' => TransactionController::class]);