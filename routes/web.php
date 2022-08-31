<?php

use App\Http\Middleware\myauth;
use App\Models\Backend\testModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResizeController;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\Backend\testController;
use App\Http\Controllers\Backend\MembarController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {
//      Route::get('/view',[testController::class,'index']);
//     //return view('backend.index');
// })->middleware(['auth'])->name('index');


// Route::get('/dashboard', function () {
//     Route::get('/view',[testController::class,'index']);
//    //return view('backend.index');
// })->middleware(['auth'])->name('index');

Route::get('/dashboard', [testController::class, 'index'])->middleware(['auth']);

Route::group(['prefix' => '/dashboard'], function () {
    Route::group(['prefix' => '/categories'], function () {
        Route::post('/addcategories', [testController::class, 'store'])->name('insert')->middleware(['auth']);
        Route::get('/addcategories', [testController::class, 'index'])->name('view')->middleware(['auth']);
    });
});


// Route::middleware(['auth'])->group(function () {
//    Route::get('/data', function () {
//     Route::controller(testController::class)->group(function () {
//         Route::post('/insert', 'store');
//     });
//     });

// Route::post('/', function () {
//     // Uses first & second middleware...
// });

// Route::get('/user/profile', function () {
//     // Uses first & second middleware...
// });


require __DIR__ . '/auth.php';
