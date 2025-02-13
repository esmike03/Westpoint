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

Route::get('/adminlogin', function () {
    return view('adminlogin');
})->name('adminlogin');

Route::get('/logout', function () {
    return view('logout');
})->name('logout');

Route::get('/userprofile', function () {
    return view('userprofile');
})->name('userprofile');

Route::delete('/modifyproduct/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
