<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryWebController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageConfigController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductWebController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::group(['middleware' => ['auth']], function (){
    Route::get('/', 'HomeController@index')->name('home');
});
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::get('/panel/login', [AuthController::class, 'panelLogin'])->name('panel.login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store'])->name('auth.store')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('panel.login')->middleware('guest');
Route::post('/web/login', [AuthController::class, 'weblogin'])->name('web.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('panel.logout')->middleware('auth');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/products', [ProductWebController::class, 'index'])->name('products');
Route::get('/customer',[CustomerController::class, 'index'])->name('customer');
Route::post('/addregister',[CustomerController::class, 'store'])->name('addregister');
Route::get('/product/{id}', [ProductWebController::class, 'detail'])->name('product');

Route::get('/category/{id}', [CategoryWebController::class, 'index'])->name('category');


Route::group(['prefix' => 'ajax', 'middleware' => ['auth']], function () {
    Route::get('/basket', [BasketController::class, 'index'])->name('basket.index');
    Route::post('/basket', [BasketController::class, 'store'])->name('basket.stroe');
});

Route::group(['prefix' => 'panel', 'middleware' => ['auth', 'check.admin']], function () {
    Route::get('/', [PanelController::class, 'index'])->name('panel.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('/category', CategoryController::class)->except(['show']);

    Route::apiResource('/stock', StockController::class)->except(['show']);

    Route::resource('/products', ProductController::class)->except(['show']);

    Route::resource('/vouchers', VoucherController::class)->except(['show']);

    Route::resource('/pageconfig', PageConfigController::class)->except(['show']);

    Route::put('/pageconfig', [PageConfigController::class, 'update'])->name('pageconfig.update');

});

Route::get('migrate', function (){
    Artisan::call();
});


