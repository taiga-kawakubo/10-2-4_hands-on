<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// 管理者ページ（ミドルウェア未適用 - 受講生が実装する）
Route::get('/admin', [AdminController::class, 'index']);


Route::middleware('chedk.admin')->group(function () 
{
    Route::post('/admin', [AdminController::class, 'show']);
});