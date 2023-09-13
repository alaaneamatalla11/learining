<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvoktController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/alaa', function () {
    return "alaa";
});
//  Route::group(['middleware' => ['jwt.verify']], function() {
//     Route::get('/',[ApiController::class,'index']) ;
//     Route::post('/add',[ApiController::class,'store']);
//     Route::put('/update/{id}',[ApiController::class,'update']);
//     Route::delete('/delete/{id}',[ApiController::class,'delete']);
    
//     });  // URL Naming & should be plural 
//-----------------------------------------------------------------------
    // Route::group(['middleware' => ['jwt.verify']], function() {
    //     Route::get('/products',[ApiController::class,'index'])->name('products.index') ;
    //     Route::post('/products',[ApiController::class,'store'])->name('products.store');
    //     Route::put('products/{id}',[ApiController::class,'update'])->name('products.update');
    //     Route::delete('/products/{id}',[ApiController::class,'delete'])->name('products.destroy');
        
    //     });
//--------------------------------------------------------------------------
        // write controller name ,, and make group function tp all route action 
    // Route::controller( ApiController::class)->group(function(){
        // Route::get('/products','index') ;
        //     Route::post('/products','store');
        //     Route::put('products/{id}',,'update');
        //     Route::delete('/products/{id}''delete');
        
    //});
//--------------------------------------------------------------------------
// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'auth'
// ], function ($router) {
//     Route::post('/login', [AuthController::class, 'login']);
//     Route::post('/register', [AuthController::class, 'register']);
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::post('/refresh', [AuthController::class, 'refresh']);
//     Route::get('/user-profile', [AuthController::class,'userProfile']);  
// });
// //--------------------------------------------------------------------------
//route&controller Resousre with except and only 
// Route::resource('tests',TestController::class);
// Route::resource('tests',TestController::class)->except
// ('index','create');
// Route::resource('tests',TestController::class)->only
// ('create');

//---------------------------------------------------------------------
// Route::get('invok',InvoktController::class);
// Route::get('invok',[InvoktController::class,'__invoke']);
//-----------------------------------------------------------
Route::get('/',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/edit/{id}',[PostController::class,'edit'])->name('posts.edit');
Route::post('/posts/update/{id}',[PostController::class,'update'])->name('posts.update');
Route::get('/posts/delete/{id}',[PostController::class,'destroy'])->name('posts.delete');