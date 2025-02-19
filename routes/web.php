<?php

use App\Models\Unit;
use App\Models\Adone;
use App\Models\Brand;
use App\Models\Member;
use App\Models\Product;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingsController;


Route::post('/auth/admin-logout', function () {
    Auth::guard('admin')->logout();
    return redirect('/admin/login'); // Redirect to login after logout
})->name('admin.logout');

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/admin/auth', [AuthController::class, 'adminauth']);

Route::get('/', function () {
    $adone = Adone::all();
    $products = Product::all();
    return view('index', compact('products', 'adone'));
});

Route::get('/admin', [AuthController::class, 'admin'])->name('admin');
Route::get('/manage/content', [AuthController::class, 'content'])->name('content');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/modifyproducts', [ProductController::class, 'modifyproducts'])->name('modifyproducts');
Route::post('/products/import', [ProductController::class, 'import'])->name('products.import');


Route::get('/business', function () {
    $members = Member::all();
    return view('business', compact('members'));
})->name('business');

Route::get('/addproducts', function () {
    if (!auth()->guard('admin')->check()) {
        // Redirect to the login page if not authenticated
        return redirect('/admin/login')->with('message', 'Unauthorized access detected!');
    }
    $categories = Categories::orderBy('category_name', 'asc')->get();
    $brand = Brand::orderBy('brand_name', 'asc')->get();
    $units = Unit::orderBy('unit_type', 'asc')->get();
    return view('addproducts', compact('categories', 'brand', 'units'));
})->name('addproducts');

Route::get('/moresettings', function () {
    if (!auth()->guard('admin')->check()) {
        // Redirect to the login page if not authenticated
        return redirect('/admin/login')->with('message', 'Unauthorized access detected!');
    }
    $category = Categories::latest()->paginate(2);
    $brands = Brand::latest()->paginate(2);
    $units = Unit::latest()->paginate(2);

    return view('moresettings', compact('brands', 'category', 'units'));
})->name('moresettings');

Route::get('/admin/login', function () {
    if (auth()->guard('admin')->check()) {
        // Redirect to the login page if not authenticated
        return redirect('/admin')->with('message', 'Already Login!');
    }
    return view('adminlogin');
})->name('adminlogin');

Route::get('/logout', function () {
    return view('logout');
})->name('logout');

Route::get('/userprofile', function () {
    return view('userprofile');
})->name('userprofile');

Route::delete('/modifyproduct/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

//more settings brand
Route::post('/brand/store', [SettingsController::class, 'brandstore'])->name('brand.store');
Route::delete('/brands/{id}', [SettingsController::class, 'branddestroy'])->name('brand.destroy');
Route::post('/category/store', [SettingsController::class, 'categorystore'])->name('category.store');
Route::delete('/category/{id}', [SettingsController::class, 'categorydestroy'])->name('category.destroy');
Route::post('/unit/store', [SettingsController::class, 'unitstore'])->name('unit.store');
Route::delete('/unit/{id}', [SettingsController::class, 'unitdestroy'])->name('unit.destroy');
Route::post('/member/store', [SettingsController::class, 'memberstore'])->name('member.store');
Route::delete('/member/{id}', [SettingsController::class, 'memberdestroy'])->name('member.destroy');
Route::post('/post/store', [SettingsController::class, 'poststore'])->name('post.store');
Route::delete('/post/{id}', [SettingsController::class, 'postdestroy'])->name('post.destroy');

//User Login
Route::post('/login', [AuthController::class, 'login'])->name('login');
//User logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    return redirect('/');
})->name('userlogout');

//User Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register.store');
