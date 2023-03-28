<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('/', function () {
//     return view('Page/login');
// });

Route::resource('user', AuthController::class);

// Route utama
Route::get('/', [SessionController::class, 'beranda']);

// Route untuk ke menu login
Route::get('/login', [SessionController::class, 'login']);

// Route untuk ke menu register
Route::get('/register', [SessionController::class, 'register']);

// Route untuk login dan register
Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route untuk ke halaman utama setelah login
Route::get('/main', [SessionController::class, 'berandain']);


// Route untuk logout
Route::get('/sesi/logout', [AuthController::class, 'logout']);

//Route untuk ke menu admin
Route::get('/admin', [SessionController::class, 'admin']);
Route::get('/users', [SessionController::class, 'user']);
