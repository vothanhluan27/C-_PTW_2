<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Index\HomeCustomController;
use App\Http\Controllers\Index\CommentCustomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\Demo\MemberController;
use App\Http\Controllers\Demo\UserController;
use App\Http\Controllers\Index\WatchBoyController;
use App\Http\Controllers\Index\WatchGirlController;
use App\Http\Controllers\index\CoupleController;
use App\Http\Controllers\index\HotController;
use App\Http\Controllers\index\SaleController;




use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\Admin\ListUserController;

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
| TEST FUNCTION router
|--------------------------------------------------------------------------
*/
Route::get('/demo', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');

// // Route::get('/demo', 'MemberController@index');
// Route::get('/demo', [MemberController::class, 'index']);

// Route::get('/demo/member', 'MemberController@getMembers');
// Route::get('/demo/get-member', [MemberController::class, 'getMembers'])->name('getMembers');

// Route::post('/demo/save', 'MemberController@save');
// // Route::get('/demo/save', [MemberController::class, 'save'])->name('save');

// Route::patch('/demo/update/{id}', ['as' => 'member.update', 'uses' => 'MemberController@update']);

// Route::delete('/demo/delete/{id}', ['as' => 'member.delete', 'uses' => 'MemberController@delete']);

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
Route::delete('/admin/{products}', [AdminNewsController::class, 'destroy'])->name('destroy');
// SEARCH
Route::get('/admin/search', [AdminNewsController::class, 'search'])->name('search');


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

//Voucher
Route::get('/addvoucher', [VoucherController::class, 'addVoucher'])->name('addvoucher');
Route::post('customvoucher', [VoucherController::class, 'customVoucher'])->name('customvoucher.custom');
Route::get('listVoucher', [VoucherController::class, 'listVoucher'])->name('listvoucher');
Route::get('getdataedtvoucher/id{id}', [VoucherController::class, 'getDataEditVoucher'])->name('getdataedtvoucher');
Route::post('editVoucher', [VoucherController::class, 'updateVoucher'])->name('editvoucher');
Route::get('deleteVoucher/id{id}', [VoucherController::class, 'deleteVoucher'])->name('deletevoucher');
Route::get('searchVoucher', [VoucherController::class, 'searchVoucher'])->name('searchvoucher');

// User
Route::get('/admin/list-user', [ListUserController::class, 'index'])->name('list-user');
Route::delete('/admin/delete-user/{type}', [ListUserController::class, 'del_user'])->name('del-user');
Route::get('users/{id}', [ListUserController::class, 'show'])->name('users.show');









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

// Contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');




/*
|--------------------------------------------------------------------------
| INDEX --- TEAM
|--------------------------------------------------------------------------
*/

// Route::get('/', [HomeCustomController::class, 'index'])->name('index');
// Route::get('/home', [HomeCustomController::class, 'index'])->name('index');
// Route::get('/home/watch_boy', [HomeCustomController::class, 'wt_boy'])->name('wt_boy');

// Route::get('/watch_boy', function () {
//     return view('home/watch_boy');
// });
// Route::get('/watch_girl', function () {
//     return view('home/watch_girl');
// });
// Route::get('/watch_couple', function () {
//     return view('home/watch_couple');
// });
// Route::get('/hot', function () {
//     return view('hot');
// });
// Route::get('/sale', function () {
//     return view('sale');
// });

// Route::get('/hot', function () {
//     return view('index/hot');
// });
// Route::get('/sale', function () {
//     return view('home/sale');
// });
// Route::get('/home', function () {
//     return view('home/home');
// });
// Route::get('/information', function () {
//     return view('home/information');
// });
// Route::get('/lienhe', function () {
//     return view('home/lienhe');
// });





/* IMPORTANT****
|--------------------------------------------------------------------------
| INDEX ---- Personal - This is for new version
|--------------------------------------------------------------------------
*/
// Route::get('/hot', function () {
//     return view('index.hot');
// });
// Route::get('/sale', function () {
//     return view('index.sale');
// });

// // Route::get('/watch_boy', function () {
// //     return view('index.watch_boy');
// // });
// Route::get('/watch_girl', function () {
//     return view('index.watch_girl');
// });
// Route::get('/watch_couple', function () {
//     return view('index.watch_couple');
// });
// Route::get('/info', function () {
//     return view('index.information');
// });
// Route::get('/add-info', function () {
//     return view('index.add-info');
// });
// Route::get('/home-new1', function () {
//     return view('dashboard.watch-home');
// });



Route::get('/home', [HomeCustomController::class, 'index'])->name('index');
Route::get('/watch_boy', [WatchBoyController::class, 'index'])->name('watch_boy.index');
Route::get('/watch_girl', [WatchGirlController::class, 'index'])->name('watch_girl.index');
Route::get('/watch_couple', [CoupleController::class, 'index'])->name('watch_couple.index');
Route::get('/watch_sale', [HotController::class, 'index'])->name('sale.index');
Route::get('/watch_hot', [SaleController::class, 'index'])->name('hot.index');







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

// PRODUCT DETAIL
// Route::get('/home/product-detail', function () {
//     return view('index.product-detail');
// });
// CHECKOUT
Route::get('/product-detail/{id}', [HomeCustomController::class, 'detail'])->name('detail');

// QUICKVIEW
Route::get('product/{id}', [HomeCustomController::class, 'show'])->name('quick-view');

// SEARCH
Route::get('/home/search', [HomeCustomController::class, 'search'])->name('home.search');
Route::get('/home/pop', [HomeCustomController::class, 'getPopUpById'])->name('getPopUpById');


/* IMPORTANT
|--------------------------------------------------------------------------
| COMMENT ---- Personal - This is for new version
|--------------------------------------------------------------------------
*/
Route::get('/product-detail', [CommentCustomController::class, 'index'])->name('product-detail');
Route::get('/admin/create/comment', [CommentCustomController::class, 'create_comment'])->name('create_comment');
Route::post('/product-detail/comment/', [CommentCustomController::class, 'generate_comment'])->name('generate_comment');


