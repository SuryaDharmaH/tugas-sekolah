<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuridController;


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
Auth::routes();
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('landing_page');
});
/* login */
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register_action', [UserController::class, 'register_action'])->name('register_action');
Route::post('/login_action', [UserController::class, 'login_action'])->name('login_action');

/* data murid */
Route::get('/dashboard',[MuridController::class, 'index'])->name('dashboard');
Route::get('/tambahmurid',[MuridController::class, 'tambahmurid'])->name('tambahmurid') ;
Route::post('/insertdata',[MuridController::class, 'insertdata'])->name('insertdata') ;
Route::get('/update/{id}',[MuridController::class, 'update'])->name('update') ;
Route::post('/updatemurid/{id}',[MuridController::class, 'updatemurid'])->name('updatemurid') ;
Route::get('/hapus/{id}',[MuridController::class, 'hapus'])->name('hapus') ;
