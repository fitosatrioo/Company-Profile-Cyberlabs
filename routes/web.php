<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrdersController;

use App\Http\Controllers\PesanController;

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

// Route::get('/', function () {
//     return view('welcome');

Route::get('/', function () {
    return view('home');
});


Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/molecule', function () {
    return view('molecule');
});

Route::get('/klien', function () {
    return view('klien');
});

Route::get('/dashboard', function () {
    return view('welcome');
});
Route::get('/company-visit', function () {
    return view('company');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/internship', function () {
    return view('internship');
});
Route::get('/order', function () {
    return view('order');
});

Route::get('/dashboard', function(){
    return view('welcome');
})->name('dashboard')->middleware('auth');

Route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::prefix('admin')->group(function() {
    Route::resource('news', NewsController::class);
});

Route::prefix('admin')->group(function() {
    Route::resource('internship', InternshipController::class);
});


Route::prefix('admin')->group(function() {
    Route::resource('abouts', AboutController::class);
});

Route::prefix('admin')->group(function() {
    Route::resource('company', CompanyController::class);
});

Route::prefix('admin')->group(function() {
    Route::resource('home', HomeController::class);
});

Route::prefix('admin')->group(function() {
    Route::resource('contact', ContactController::class);
});

Route::prefix('admin')->group(function() {
    Route::get('cetak', [OrdersController::class, 'cetakorder']);
});

Route::prefix('admin')->group(function() {
    Route::get('form-cetak', [OrdersController::class, 'formcetakorder']);
});

Route::prefix('admin')->group(function() {
    Route::get('cetak-order-pertanggal/{tglawal}/{tglakhir}', [OrdersController::class, 'cetakorderpertanggal']);
});

Route::prefix('admin')->group(function() {
    Route::resource('orders', OrdersController::class);
});

Route::resource('/', BerandaController::class);
Route::resource('/berita', BeritaController::class);
Route::resource('/tentang', TentangController::class);
Route::resource('/company-visit', CompaniesController::class);
Route::resource('/internship', MagangController::class);
Route::resource('kontak', KontakController::class);
Route::resource('order', PesanController::class);

// route::get('admin/cetak','OrdersController@cetakpegawai')->name('cetakpegawai');
// Route::get('/cetak', [OrdersController::class, 'cetakorder']);
// Route::get('/cetak-order-pertanggal/(tglawal)/(tglakhir)', [OrdersController::class, 'cetakorderpertanggal']);




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
