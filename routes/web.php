<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Store\StoreController;
use App\Models\Order;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    
    $stores = Store::latest()->paginate(6);
    return view('landing_page', compact('stores'))->with(request()->input('page'));
});
Route::get('/istores', function () {
    
    $stores = Store::latest()->paginate(6);
    return view('stores', compact('stores'))->with(request()->input('page'));
});

Auth::routes();
Route::get('/show/{one}', [StoreController::class, 'store'])
    ->where('one', '[\w\d\_]+')
    ->name('store.store_profile');

Route::get('/show/{one}/{two}', [StoreController::class, 'store_category'])
    ->where('one', '[\w\d\_]+')
    ->where('two', '[\w\d\_]*_[\w\d\_]*')
    ->name('store.store_profile');

Route::get('/show/{one}/{three}', [StoreController::class, 'store_product'])
    ->where('one', '[\w\d\_]+')
    ->where('three', '[\w\d]+')
    ->name('store.store_profile');

Route::get('/show/{one}/{two}/{three}', [StoreController::class, 'store_category_product'])
    ->where('one', '[\w\d\_]+')
    ->where('two', '[\w\d\_]*_[\w\d\_]*')
    ->where('three', '[\w\d]+')
    ->name('store.store_profile');

Route::post('add-to-cart', [CartController::class, 'addtocart']);
Route::get('/load-cart-data', [CartController::class, 'cartloadbyajax']);
Route::get('/{one}/cart', [CartController::class, 'index']);
Route::post('update-to-cart', [CartController::class, 'updatetocart']);
Route::delete('delete-from-cart', [CartController::class, 'deletefromcart']);
Route::get('clear-cart', [CartController::class, 'clearcart']);


Route::post('/order/add_order', [OrderController::class, 'add_order']);
Route::get('/order/add_order', function () {
    
    return redirect()->back();
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::prefix('user')->name('user.')->group(function(){

//     Route::middleware(['guest','PreventBackHistory'])->group(function(){
//           Route::view('/login','dashboard.user.login')->name('login');
//           Route::view('/register','dashboard.user.register')->name('register');
//           Route::post('/create',[UserController::class,'create'])->name('create');
//           Route::post('/check',[UserController::class,'check'])->name('check');
//     });

//     Route::middleware(['auth','PreventBackHistory'])->group(function(){
//           Route::view('/home','dashboard.user.home')->name('home');
//           Route::post('/logout',[UserController::class,'logout'])->name('logout');
//           Route::get('/add-new',[UserController::class,'add'])->name('add');
//     });
// });

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::get('/home', [AdminController::class, 'dashboard'])->name('home');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

        Route::get('/stores', [AdminController::class, 'stores'])->name('stores');
        Route::get('/admins', [AdminController::class, 'admins'])->name('admins');

        Route::view('/newadmin', 'dashboard.admin.newadmin')->name('newadmin');
        Route::get('/{admin}/edit', [AdminController::class, 'edit_admin']);
        Route::put('/update/{admin}', [AdminController::class, 'update'])->name('update');

        
        Route::put('/deactivate/{store}', [StoreController::class, 'deactivate_store'])->name('deactivate_store');
        Route::put('/activate/{store}', [StoreController::class, 'activate_store'])->name('activate_store');
        Route::put('/remove/{store}', [StoreController::class, 'destroy'])->name('remove_store');

        Route::get('/profile/{admin}', [AdminController::class, 'profile'])->name('profile');
        Route::get('/setting/{admin}', [AdminController::class, 'setting'])->name('setting');
        Route::put('/changepass/{admin}', [AdminController::class, 'changepass'])->name('changepass');

        Route::delete('/destory/{admin}', [AdminController::class, 'destroy'])->name('destroy');
        Route::post('/create', [AdminController::class, 'create'])->name('create');
    });
});

Route::prefix('store')->name('store.')->group(function () {

    Route::middleware(['guest:store', 'PreventBackHistory'])->group(function () {
        Route::view('/login', 'dashboard.store.login')->name('login');
        Route::view('/register', 'dashboard.store.register')->name('register');
        Route::post('/create', [StoreController::class, 'create'])->name('create');
        Route::post('/check', [StoreController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:store', 'PreventBackHistory'])->group(function () {
        Route::get('/home', [StoreController::class, 'dashboard'])->name('home');
        Route::post('/logout', [StoreController::class, 'logout'])->name('logout');

        Route::get('/products', [ProductController::class, 'products'])->name('products');
        Route::get('/categorys', [CategoryController::class, 'categorys'])->name('categorys');
        Route::get('/orders', [OrderController::class, 'orders'])->name('orders');
        Route::get('/{order}/detail', [OrderController::class, 'detail']);

        Route::get('/newproduct', [ProductController::class, 'newproduct'])->name('newproduct');
        Route::view('/newcategory', 'dashboard.store.newcategory')->name('newcategory');

        Route::post('/create_product', [ProductController::class, 'create'])->name('create_product');
        Route::post('/create_category', [CategoryController::class, 'create'])->name('create_category');

        Route::get('/{store}/edit_store', [StoreController::class, 'edit_store']);
        Route::get('/{product}/edit_product', [ProductController::class, 'edit_product']);
        Route::get('/{category}/edit_category', [CategoryController::class, 'edit_category']);

        Route::put('/update_store/{store}', [StoreController::class, 'update'])->name('update_store');
        Route::put('/update_product/{product}', [ProductController::class, 'update'])->name('update_product');
        Route::put('/update_category/{category}', [CategoryController::class, 'update'])->name('update_category');
        Route::put('/update_category_show_cat/{category}', [CategoryController::class, 'update_show_cat'])->name('update_show_cat');
        Route::put('/update_order_status/{order}', [OrderController::class, 'update_order_status'])->name('update_order_status');

        Route::get('/profile/{store}', [StoreController::class, 'profile'])->name('profile');
        Route::get('/setting/{store}', [StoreController::class, 'setting'])->name('setting');
        Route::put('/changepass/{store}', [StoreController::class, 'changepass'])->name('changepass');

        Route::delete('/destory_product/{product}', [ProductController::class, 'destroy'])->name('destory_product');
        Route::delete('/destory_category/{category}', [CategoryController::class, 'destroy'])->name('destory_category');
        Route::delete('/destory_order/{order}', [OrderController::class, 'destroy'])->name('destory_order');
    });
});
