<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});


// make route for role
Route::get('/role/{role}' , function ( $role){
    return view('role' , ['name' => 'Reihannudin','role' => 'manager']);
});

//make route for fruit
Route::get('/fruit' , function (){
    return view('fruit' , ['fruits' => ['apple' , 'orange' , 'banana' , 'strawberry' , 'grape']]);
} );

// make basic route
Route::get('/contact' , function(){
    return 'Contact : 087773301182';
});

Route::get('/sum' ,function(){
    return "4 + 8  = " . 4+8;
});

// make view route
//Route::get('/' , function(){
//    return view('home');
//});

Route::get('/' , function(){
    return view('layout.main-layout');
});

Route::get('/album' , function(){
    return view('album');
});


// make view argument route
Route::get('/about' , function(){
    return view('about' , ['name' => 'Andrian Raihannudin' , 'hobbies' => 'Coding , Games']);
});

// make view route by controller
Route::get('/product' , [ProductController::class , 'index']);

// make redirect view
Route::redirect('/home' , '/');

// make route parameter
Route::get('/product/{id}' , function($id){
   return 'product dengan id '. $id;
});

// make route parameter with argument
Route::get('/product/detail/{id}' , function($id){
    return view('detail' , ['id' => $id]);
});

// make prefix and group route
Route::prefix('p')->group(function(){
    Route::get('/bts-japan-mots-the-journey' , function(){
        return 'BTS Japan MOTS THE JOURNEY' ;
    });
    Route::get('/bts-japan-face-yourself' , function(){
        return 'BTS Japan FACE YOURSELF' ;
    });
    Route::get('/bts-japan-youth' , function(){
        return 'BTS Japan YOUTH' ;
    });
    Route::get('/bts-japan-wake-up' , function(){
        return 'BTS Japan WAKE UP' ;
    });
});
