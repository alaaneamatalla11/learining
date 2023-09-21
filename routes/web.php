<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\TraitController;
use App\Http\Controllers\ClothsController;
use App\Http\Controllers\InvoktController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadImages;
use Illuminate\Support\Facades\Storage;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//route&controller Resousre with except and only 
// Route::resource('tests',TestController::class);
// Route::resource('tests',TestController::class)->except
// ('index','create');
// Route::resource('tests',TestController::class)->only
// ('create');

//invok ONLY DO ONE THING -----------------------------------------------------
// Route::get('invok',InvoktController::class);
// Route::get('invok',[InvoktController::class,'__invoke']);


//QUERY BILDER ----------------------------------------------------
// Route::get('/',[PostController::class,'index'])->name('posts.index');
// Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
// Route::post('/posts',[PostController::class,'store'])->name('posts.store');
// Route::get('/posts/edit/{id}',[PostController::class,'edit'])->name('posts.edit');
// Route::post('/posts/update/{id}',[PostController::class,'update'])->name('posts.update');
// Route::get('/posts/delete/{id}',[PostController::class,'destroy'])->name('posts.delete');


// ELQENT -------------------------------------------------------------------------------
Route::resource('comments', CommentController::class);

// // Route::get('/',[CommentController::class,'index'])->name('comments.index');
// // Route::get('/comments/create',[CommentController::class,'create'])->name('comments.create');
// // Route::post('/comments',[CommentController::class,'store'])->name('comments.store');
// // Route::get('/comments/edit/{id}',[CommentController::class,'edit'])->name('comments.edit');
// // Route::post('/comments/update/{id}',[CommentController::class,'update'])->name('comments.update');

// Route::get('/comments/softdelete/{id}',[CommentController::class,'softdelete'])->name('comments.softdelete');
// Route::get('/comments/restore/{id}',[CommentController::class,'restore'])->name('comments.restore');
// Route::get('/comments/forcedelete/{id}',[CommentController::class,'forcedelete'])->name('comments.forcedelete');

// //ONE TO ONE RELATIONSHIP ----------------------------------------------------------
// Route::get('/user',[UserController::class,'phone']);
// Route::get('/phone',[PhoneController::class,'user']);

// //ONE TO MANY RELATIONSHIP ----------------------------------------------------------
// Route::get('/user',[UserController::class,'cloths']);
// Route::get('/cloths',[ClothsController::class,'user']);

// // //MANY TO MANY RELATIONSHIP ----------------------------------------------------------
// Route::get('/users',[UserController::class,'roles']);
// Route::get('/roles',[RoleController::class,'users']);

// //TEST TRAIT-----------------------------------------------------------------------
//  Route::get('/trait',[TraitController::class,'index']);
//  Route::get('/comment',[TraitController::class,'comment']);
//  //QUEUE---------------------------------------------------------------
// Route::get('/statu',[UserController::class,'status']);
//---------------------------------------------------------------------
Route::get('/', function () {
  
Storage::disk('test')->put('test.txt', 'test');
return view('welcome');

});
//-------------------upload image ---------------------------------------------
Route::get('showform', [UploadImages::class,'ShowForm']);
Route::post('store',[UploadImages::class,'store'])->name('images.store');
Route::get('showimage', [UploadImages::class,'Show']);
//-------------------------------------------------------------------

Route::get('/notifications',[CommentController::class,'show']);
   




