<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CountryuseController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Emailcontroller;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PastController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
  //

|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/uses/create',[UserController::class, 'create'])->name('uses.create');

// Route::get('/', function () {
//     return view('welcome');
// });
//....page.......//
 Route::get('/',[HomeController::class, 'index'])->name('blog.index');
 Route::get('/single',[HomeController::class, 'singlepage'])->name('blog.single');
 Route::get('/about',[HomeController::class, 'about'])->name('about');
 Route::get('/contact',[HomeController::class, 'contact'])->name('contact');


 //.....country.....//
 Route::get('/country',[CountryController::class, 'index'])->name('country.home');
 Route::get('/country/create',[CountryController::class, 'create'])->name('country.create');
 Route::get('/country/{id}/show',[CountryController::class, 'show'])->name('country.show');
 Route::get('/country/{country}/edit',[CountryController::class, 'edit'])->name('country.edit');
 Route::post('/country/store',[CountryController::class, 'store'])->name('country.store');
 Route::patch('/country/{id}/update',[CountryController::class, 'update'])->name('country.update');
 Route::delete('/country/{id}/delete',[CountryController::class, 'destroy'])->name('country.destroy');

 //......countryuser.....//
 Route::get('/countryuser',[CountryuseController::class, 'index'])->name('countryuser.home');
 Route::get('/countryuser/create',[CountryuseController::class, 'create'])->name('countryuser.create');
 Route::post('/countryuser/store',[CountryuseController::class, 'store'])->name('countryuser.store');



 //......many to many relation route book and author.....//
 Route::get('/authors',[AuthorController::class, 'index'])->name('authors.home');
 Route::get('/authors/create',[AuthorController::class, 'create'])->name('author.create');
 Route::post('/authors/store',[AuthorController::class, 'store'])->name('author.store');
 
 //......many to many relation route book and author.....//
 Route::get('/books',[BooksController::class, 'index'])->name('books.home');
 Route::get('/books/create',[BooksController::class, 'create'])->name('books.create');
 Route::post('/books/store',[BooksController::class, 'store'])->name('books.store');
 Route::get('/books/{id}/edit',[BooksController::class, 'edit'])->name('books.edit');
 Route::patch('/books/{id}/update',[BooksController::class, 'update'])->name('books.update');
  //.....student.....//
  Route::get('/students',[StudentController::class, 'index'])->name('students.home');
  Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');
  Route::post('/students/store',[StudentController::class, 'store'])->name('students.store');
  Route::get('/students/{id}/edit',[StudentController::class, 'edit'])->name('students.edit');
  Route::patch('/students/{id}/update',[StudentController::class, 'update'])->name('students.update');
  Route::delete('/students/{id}/delete',[StudentController::class, 'destroy'])->name('students.destroy');
  //.....email.....//
  Route::get('/emails',[Emailcontroller::class, 'sending'])->name('emails.home');
  Route::post('/emails/store',[Emailcontroller::class, 'store'])->name('emails.store');
  //.....image upload.....//
  Route::get('/images/create',[ImagesController::class, 'create'])->name('images.home');
  Route::post('/images/store',[ImagesController::class, 'store'])->name('images.store');

  //.....morphs post user imageable.....//
  Route::get('/users',[PersonController::class, 'index'])->name('users.home');
  Route::get('/users/create',[PersonController::class, 'create'])->name('users.home');
  Route::post('/users/store',[PersonController::class, 'store'])->name('users.store');

  //.....morphs post user imageable.....//
  Route::get('/pasts/create',[PastController::class, 'create'])->name('pasts.home');
  Route::post('/pasts/store',[PastController::class, 'store'])->name('pasts.store');
  
//.....video.....//
  Route::resource('/videos',VideoController::class);
  //.....comment.....//
  Route::post('/videos/{id}/comments',[CommentController::class,'store']);

  //.....tag.....//
  Route::resource('/tags',TagsController::class);


  // Route::get('/uses',UserController::class);
  Route::get('/uses/create',[UserController::class, 'create'])->name('uses.create');
  Route::post('/uses/store',[UserController::class, 'store'])->name('uses.store');