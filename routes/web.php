<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AttributeValueController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\CategoryController as FrontCategoryController;
use App\Http\Controllers\Site\ProductController as FrontProductController;


use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\RatingController;

use App\Http\Controllers\Site\CheckoutController;
use App\Http\Controllers\Site\WishlistController;
use App\Http\Controllers\Site\AccountController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PageController;


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

Route::get('/',[HomeController::class,'show'])->name('home');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/contact-success',[PageController::class,'contactSuccess'])->name('contact.success');
Route::post('/contact',[PageController::class,'contactStore'])->name('contact');

Route::get('/faq',[PageController::class,'faq'])->name('faq');


Route::post('/cart',[CartController::class,'store'])->name('cart.store');
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::get('/checkout',[CheckoutController::class,'show'])->name('checkout.show');
Route::post('orders',[CheckoutController::class,'store'])->name('orders.store');
Route::patch('/cart/update',[CartController::class,'update'])->name('cart.update');
Route::get('/cart/{rowId}',[CartController::class,'destroy'])->name('cart.destroy');

Route::get('cart-empty',function(){
	Cart::destroy();
});


Route::get('success',function(){
	return view('site.pages.success');
})->name('success');

Route::post('/wishlists',[WishlistController::class,'store'])->name('wishlists.store')->middleware('auth');
Route::delete('/wishlists/{product}',[WishlistController::class,'destroy'])->name('wishlists.destroy')->middleware('auth');

Route::post('/products/{product}/ratings', [RatingController::class,'store'])->name('products.ratings.store');


Route::get('/categories/{slug1}/{slug2?}/{slug3?}', [FrontCategoryController::class,'show'])->name('category.show');
Route::get('/product/{slug}', [FrontProductController::class,'show'])->name('product.show');

Route::post('/products/{product}/ratings', [RatingController::class,'store'])->name('products.ratings.store');


Route::prefix('account')->middleware('auth')->group(function(){


	// Route::get('/dashboard',[AccountController::class,'dashboard'])->name('dashboard');

	Route::get('/orders',[AccountController::class,'orders'])->name('account-orders');
	Route::get('/wishlist',[AccountController::class,'wishlist'])->name('wishlist');
	Route::get('/account-details',[AccountController::class,'details'])->name('account-details');
	Route::patch('/account-details',[AccountController::class,'update'])->name('account-details');
	Route::post('/order-now',[AccountController::class,'orderNow'])->name('order-now');



});

// Route::get('/account/dashboard', function () {
//     return view('account.dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('admin/login',[LoginController::class,'create'])->name('admin.login');

Route::post('admin/login',[LoginController::class,'authenticate'])->name('admin.login');

Route::prefix('admin')->name('admin.')->middleware(['employee'])->group(function(){
	Route::get('dashboard',[DashboardController::class,'home'])->name('dashboard');


	Route::post('attributes/get-values', [AttributeValueController::class,'getValues']);
	Route::post('attributes/add-values', [AttributeValueController::class,'addValues']);
	Route::post('attributes/update-values',[AttributeValueController::class,'updateValues']);
	Route::post('attributes/delete-values', [AttributeValueController::class,'deleteValues']);



		// Load attributes on the page load
	Route::get('products/attributes/load', [ProductAttributeController::class , 'loadAttributes' ]);
	// Load product attributes on the page load
	Route::post('products/attributes', [ProductAttributeController::class ,'productAttributes' ]);
	// Load option values for a attribute
	Route::post('products/attributes/values', [ProductAttributeController::class,'loadValues']);
	// Add product attribute to the current product
	Route::post('products/attributes/add', [ProductAttributeController::class, 'addAttribute']);
	// Delete product attribute from the current product
	Route::post('products/attributes/delete', [ProductAttributeController::class,'deleteAttribute']);


	Route::get('contacts', [ContactController::class , 'index' ])->name('contacts.index');
	Route::get('contacts/{contact}', [ContactController::class , 'show' ])->name('contacts.show');




	Route::resource('posts',PostController::class);
	Route::resource('products',ProductController::class);
	Route::resource('categories',CategoryController::class);
	Route::resource('users',PostController::class);
	Route::resource('attributes',AttributeController::class);
	Route::resource('brands',BrandController::class);
	Route::resource('orders',OrderController::class);
	Route::resource('sliders',SliderController::class);



	Route::post('products/{product}/images',[ProductController::class,'uploadImages'])->name('products.images.upload');
	Route::delete('products/medias/{media}',[ProductController::class,'deleteImage'])->name('products.images.delete');

});


Route::post('/newsletter-subscriptions',[SubscriptionController::class,'store']);

require __DIR__.'/auth.php';
