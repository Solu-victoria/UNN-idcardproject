<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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
// });

Route::get('/', [pagesController::class, 'index']);
Route::get('/about', [pagesController::class, 'about']);
Route::get('/contact', [pagesController::class, 'contact']);
// Route::get('/login', [pagesController::class, 'login']);
// Route::get('/register', [pagesController::class, 'register']);

Route::get('/portal/index', [pagesController::class, 'pindex']);
Route::get('/portal/id', [pagesController::class, 'view_id']);
Route::get('/portal/id-request', [pagesController::class, 'request']);
Route::get('/portal/id-report', [pagesController::class, 'report']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
