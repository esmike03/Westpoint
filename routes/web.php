<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/', function () {

    $products = Product::all();
    return view('index', compact('products'));
});

Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/modifyproducts', [ProductController::class, 'modifyproducts'])->name('modifyproducts');
Route::post('/products/import', [ProductController::class, 'import'])->name('products.import');


Route::get('/business', function () {
    return view('business');
})->name('business');

Route::get('/addproducts', function () {
    return view('addproducts');
})->name('addproducts');

Route::get('/moresettings', function () {
    return view('moresettings');
})->name('moresettings');
