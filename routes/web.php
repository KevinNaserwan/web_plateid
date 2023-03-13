<?php

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

Route::get('/register', [SessionController::class, 'register']);
Route::get('/login', [SessionController::class, 'login']);
Route::post('/create', [SessionController::class, 'create']);
