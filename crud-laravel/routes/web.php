<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;

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

Route::controller(FuncionarioController::class)->group(function() {
    Route::get('/funcionarios', [FuncionarioController::class, 'index']);
    Route::get('/funcionarios/criar', [FuncionarioController::class, 'create']);
    Route::post('/funcionarios/criar', [FuncionarioController::class, 'store']);
});

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
