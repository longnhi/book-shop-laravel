<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

//shop route
Route::get('/', function(){ return redirect()->to('/home'); })->name('home');
Route::get('/home',[HomeController::class, 'index']);

Route::get('/contact',[HomeController::class, 'contact']);

Route::get('/product',function(){ return redirect()->to('/product/list'); });
Route::get('/product/list',[HomeController::class, 'productList']);
Route::get('/products-by-category/{id}',[HomeController::class, 'productsByCategory']);
Route::get('/products-by-publisher/{id}',[HomeController::class, 'productsByPublisher']);
Route::get('/products-by-author/{id}',[HomeController::class, 'productsByAuthor']);
Route::get('/product/detail/{id}',[HomeController::class, 'productDetail']);
Route::get('/product/search/',[HomeController::class, 'searchProduct']);

Route::get('/carts',[CartController::class, 'show'])->name('cart');
Route::post('/add-to-carts',[CartController::class, 'addToCarts']);
Route::put('/update-carts',[CartController::class, 'updateCarts']);
Route::get('/delete-from-carts/{id}',[CartController::class, 'deleteFromCarts']);

Route::get('/checkout',[CartController::class, 'checkout'])->middleware('auth');
Route::post('/place-order',[CartController::class, 'placeOrder'])->middleware('auth');

Route::get('/author', function(){ return redirect()->to('/author/list'); });
Route::get('/author/list',[HomeController::class, 'authorList']);
Route::get('/author/detail/{id}',[HomeController::class, 'authorDetail']);

Route::get('/wishlist',[HomeController::class, 'showWishlist'])->middleware('auth');
Route::post('/add-to-wishlist',[HomeController::class, 'addToWishlist'])->middleware('auth');
Route::delete('/remove-from-wishlist/{id}',[HomeController::class, 'removeFromWishlist'])->middleware('auth');

Route::get('/my-orders',[HomeController::class, 'showMyOrders'])->middleware('auth');

Route::get('/login',[HomeController::class, 'login'])->name('login');
Route::get('/register',[HomeController::class, 'register'])->name('register');
Route::post('/user/register',[RegisterController::class, 'store']);
Route::post('/user/login',[LoginController::class, 'store']);
Route::post('/user/logout',[LoginController::class, 'logout']);

//admin route
Route::middleware(['auth.admin'])->group(function () {
    Route::prefix('admin')->group(function(){

        Route::get('/',function(){ return redirect()->to('/admin/home'); });
        Route::get('/home',[AdminController::class, 'index']);

        #Category
        Route::prefix('/categorys')->group(function(){
            Route::get('/',function(){ return redirect()->to('/admin/categorys/list'); });
            Route::get('/list',[CategoryController::class, 'index']);
            Route::get('/create',[CategoryController::class, 'create']);
            Route::post('/store',[CategoryController::class, 'store']);
            Route::get('/edit/{id}',[CategoryController::class, 'edit']);
            Route::put('/update/{id}',[CategoryController::class, 'update']);
            Route::delete('/detroy/{id}',[CategoryController::class, 'detroy']);
        });

        #Publisher
        Route::prefix('/publishers')->group(function(){
            Route::get('/',function(){ return redirect()->to('/admin/publishers/list'); });
            Route::get('/list',[PublisherController::class, 'index']);
            Route::get('/create',[PublisherController::class, 'create']);
            Route::post('/store',[PublisherController::class, 'store']);
            Route::get('/edit/{id}',[PublisherController::class, 'edit']);
            Route::put('/update/{id}',[PublisherController::class, 'update']);
            Route::delete('/detroy/{id}',[PublisherController::class, 'detroy']);
        });

        #Author
        Route::prefix('/authors')->group(function(){
            Route::get('/',function(){ return redirect()->to('/admin/authors/list'); });
            Route::get('/list',[AuthorController::class, 'index']);
            Route::get('/create',[AuthorController::class, 'create']);
            Route::post('/store',[AuthorController::class, 'store']);
            Route::get('/edit/{id}',[AuthorController::class, 'edit']);
            Route::put('/update/{id}',[AuthorController::class, 'update']);
            Route::delete('/detroy/{id}',[AuthorController::class, 'detroy']);
        });

        #Product
        Route::prefix('/products')->group(function(){
            Route::get('/',function(){ return redirect()->to('/admin/products/list'); });
            Route::get('/list',[ProductController::class, 'index']);
            Route::get('/create',[ProductController::class, 'create']);
            Route::get('/detail/{id}',[ProductController::class, 'show']);
            Route::post('/store',[ProductController::class, 'store']);
            Route::get('/edit/{id}',[ProductController::class, 'edit']);
            Route::put('/update/{id}',[ProductController::class, 'update']);
            Route::delete('/detroy/{id}',[ProductController::class, 'detroy']);
        });
        

        #User
        Route::prefix('/users')->group(function(){
            Route::get('/',function(){ return redirect()->to('/admin/users/list'); });
            Route::get('/list',[UserController::class, 'index']);
        });        

        #Order
        Route::prefix('/orders')->group(function(){
            Route::get('/',function(){ return redirect()->to('/admin/orders/list'); });
            Route::get('/list',[OrderController::class, 'index']);
            Route::get('/detail/{id}',[OrderController::class, 'detail']);
            Route::put('/detail/handle/{id}',[OrderController::class, 'handle']);
        });
        
    });
});