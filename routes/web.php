<?php
use App\Message;
use App\Product;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/shop', function () {
    $products = Product::latest()->get();
    return view('shop', compact('products'));
});

Route::post('/shop', function(){
    $product = Product::create(request()->all());
    return redirect()->back();
});

Route::get('/contact', function () {
    $messages = Message::latest()->get();
    return view('contact', compact('messages'));
});

Route::post('/contact', function(){
    $message = Message::create(request()->all());
    return redirect()->back();
} );

Route::resource('computer', 'ComputerController');


