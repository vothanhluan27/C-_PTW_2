<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Index\HomeCustomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;


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
// Route::get('/', [CustomAuthController::class, 'dashboard']);
// Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
// ############################################____ PRODUCT ____############################################ //
Route::get('/admin', [AdminNewsController::class, 'index'])->name('admin');
Route::get('/admin/create', [AdminNewsController::class, 'create'])->name('create');
Route::post('/admin/store/', [AdminNewsController::class, 'store'])->name('store');
Route::get('/admin/edit/{products}', [AdminNewsController::class, 'edit'])->name('edit');
Route::put('/admin/edit/{products}', [AdminNewsController::class, 'update'])->name('update');
// Route::get('/admin/edit',[AdminNewsController::class, 'test'])->name('test');
Route::delete('/admin/{products}', [AdminNewsController::class, 'destroy'])->name('destroy');
// Route::get('/admin/create', [AdminNewsController::class, 'getAllManu'])->name('getAllManu');

// ############################################____ BRAND ____############################################ //
Route::get('/admin/manu', [BrandController::class, 'index'])->name('admin/manu');
Route::get('/admin/create/manu', [BrandController::class, 'create'])->name('create');
Route::post('/admin/store/generate', [BrandController::class, 'generate'])->name('generate');
Route::delete('/admin/delete/{brand}', [BrandController::class, 'del'])->name('del');
Route::get('/admin/edit/manu/{brand}', [BrandController::class, 'edit'])->name('edit/manu');
Route::put('/admin/edit/manu/{brand}', [BrandController::class, 'update'])->name('update/manu');

// ############################################____ TYPE ____############################################ //
Route::get('/admin/type', [TypeController::class, 'index'])->name('admin/type');
Route::get('/admin/create/type', [TypeController::class, 'create'])->name('create');
Route::post('/admin/store/generate-type', [TypeController::class, 'generate'])->name('generate-type');
Route::delete('/admin/delete-type/{type}', [TypeController::class, 'delType'])->name('delType');
Route::get('/admin/edit/type/{type}', [TypeController::class, 'edit'])->name('edit/type');
Route::put('/admin/edit/type/{type}', [TypeController::class, 'update'])->name('update/type');



// -----------------------------------------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});



/*
|--------------------------------------------------------------------------
| INDEX --- TEAM
|--------------------------------------------------------------------------
*/

// Route::get('/', [HomeCustomController::class, 'index'])->name('index');
// Route::get('/home', [HomeCustomController::class, 'index'])->name('index');
// Route::get('/home/watch_boy', [HomeCustomController::class, 'wt_boy'])->name('wt_boy');

Route::get('/watch_boy', function () {
    return view('home/watch_boy');
});
Route::get('/watch_girl', function () {
    return view('home/watch_girl');
});
Route::get('/watch_couple', function () {
    return view('home/watch_couple');
});
Route::get('/hot', function () {
    return view('hot');
});
Route::get('/sale', function () {
    return view('sale');
});

Route::get('/hot', function () {
    return view('home/hot');
});
Route::get('/sale', function () {
    return view('home/sale');
});
Route::get('/home', function () {
    return view('home/home');
});
Route::get('/information', function () {
    return view('home/information');
});
Route::get('/lienhe', function () {
    return view('home/lienhe');
});



/* IMPORTANT
|--------------------------------------------------------------------------
| INDEX ---- Personal - This is for new version
|--------------------------------------------------------------------------
*/
// Route::get('/home-new1', function () {
//     return view('dashboard.watch-home');
// });
Route::get('/home', [HomeCustomController::class, 'index'])->name('index');

// CART
Route::get('cart', [HomeCustomController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [HomeCustomController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [HomeCustomController::class, 'updateCart'])->name('update_cart');
Route::delete('remove-from-cart', [HomeCustomController::class, 'removeProduct'])->name('remove_from_cart');

// WISHLIST
Route::get('wish', [HomeCustomController::class, 'wish'])->name('wish');
Route::get('add-to-wish/{id}', [HomeCustomController::class, 'addToWishList'])->name('add_to_wish');
Route::patch('update-wish', [HomeCustomController::class, 'updateWishList'])->name('update_wish');
Route::delete('remove-from-wish', [HomeCustomController::class, 'removeWishList'])->name('remove_from_wish');

// CHECKOUT
Route::get('check-out', [HomeCustomController::class, 'check_out_index'])->name('check-out');
