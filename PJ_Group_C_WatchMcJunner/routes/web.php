<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Index\HomeCustomController;


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
//     return view('welcome');
// });
// Route::get('/view', function () {
//     return view('firstView');
// });


/*
|--------------------------------------------------------------------------
| Login router
|--------------------------------------------------------------------------
*/
Route::get('/', [CustomAuthController::class, 'dashboard']);
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin', [AdminNewsController::class, 'index'])->name('admin');
Route::get('/admin/create', [AdminNewsController::class, 'create'])->name('create');
Route::post('/admin/store/', [AdminNewsController::class, 'store'])->name('store');
Route::get('/admin/edit/{products}', [AdminNewsController::class, 'edit'])->name('edit');
Route::put('/admin/edit/{products}',[AdminNewsController::class, 'update'])->name('update');
// Route::get('/admin/edit',[AdminNewsController::class, 'test'])->name('test');
Route::delete('/admin/{products}',[AdminNewsController::class, 'destroy'])->name('destroy');
// Route::get('/admin/create', [AdminNewsController::class, 'getAllManu'])->name('getAllManu');


/*
|--------------------------------------------------------------------------
| INDEX
|--------------------------------------------------------------------------
*/
Route::get('/home', [HomeCustomController::class, 'index'])->name('index');
