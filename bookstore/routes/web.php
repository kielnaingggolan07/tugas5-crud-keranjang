<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

route::get('/product', [ProductController::class, 'index']);
route::get('product/add', [ProductController::class, 'create']);
Route::get('product/{id}/edit', [ProductController::class, 'edit']);
Route::get('product/{id}/delete', [ProductController::class, 'destroy']);
Route::post('/product',[ProductController::class, 'store']);
Route::put('/product/{id}', [ProductController::class, 'update']);

route::get('/category', [CategoryController::class, 'index']);
route::get('category/add', [CategoryController::class, 'create']);
Route::post('/category',[CategoryController::class, 'store']);
Route::get('category/edit', [CategoryController::class, 'edit']);
Route::get('category/delete', [CategoryController::class, 'destroy']);
Route::put('/category/', [CategoryController::class, 'update']);
