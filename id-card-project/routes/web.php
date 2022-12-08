<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\idcardRequestController;
use App\Http\Controllers\idcardReportController;

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
Route::get('/info', [pagesController::class, 'info'])->name('info');

Route::get('/portal/index', [pagesController::class, 'pindex']
)->middleware(['auth', 'verified'])->name('portal_index');

Route::get('/portal/id/{no}', [pagesController::class, 'view_id'])->middleware(['auth', 'verified']);

Route::get('/portal/id-request', [idcardRequestController::class, 'create'])
                ->name('id-request')
                ->middleware(['auth', 'verified']);

Route::post('/portal/id-request', [idcardRequestController::class, 'store'])->middleware(['auth', 'verified']);

Route::post('/portal/id-report', [idcardReportController::class, 'store'])->middleware(['auth', 'verified']);

Route::get('/portal/id-report', [idcardReportController::class, 'create'])
            ->name('id-report')
            ->middleware(['auth', 'verified']);

Route::get('/userinfo/{id}', [pagesController::class, 'userinfo']);

// Route::get('/dashboard', function () {
//     return view('portal.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
