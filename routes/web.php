<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TesUrinController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\SosialisasiController;
use App\Http\Controllers\RehabilitasiController;

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
})-> middleware('auth');

Route::get('login', [AuthController::class,'login']) ->name('login');
Route::post('login', [AuthController::class, 'authenticating']);
Route::get('register', [AuthController::class,'register']);
Route::post('register', [AuthController::class,'regist_process']);

Route::get('logout',[AuthController::class, 'logout']);
Route::get('dashboard', [DashboardController::class, 'base'])-> middleware(['auth','only_admin']);
Route::get('profile', [UserController::class, 'profile'])-> middleware(['auth','only_client']);
// Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
// Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
// Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::resource('kategori-layanan', LayananController::class);

Route::get('users', [UserController::class,'base']);
Route::resource('rehabilitasi', RehabilitasiController::class);
Route::resource('pengaduan', PengaduanController::class);
Route::get('pengaduan', [PengaduanController::class,'index']);
Route::resource('sosialisasi', SosialisasiController::class);
Route::get('sosialisasi', [SosialisasiController::class,'index']);
Route::resource('tesurin', TesUrinController::class);
Route::get('tesurin', [TesUrinController::class,'index']);
