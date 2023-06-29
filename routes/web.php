<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\LocalizationController;


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


//USER
    Route::get('/', 'indexController@index')->name('home');
    Route::get('/about', 'indexController@about')->name('about');
    Route::get('/local', 'indexController@local')->name('local');
    Route::get('/online', 'indexController@online')->name('online');
    Route::get('/news', 'indexController@news')->name('news');
    Route::get('/newsDtil', 'indexController@newsDtil')->name('newsDtil');
    Route::get('/courseDtil', 'indexController@courseDtil')->name('courseDtil');
    Route::get('/contact', 'indexController@contact')->name('contact');
    Route::get('/faq', 'indexController@faq')->name('faq');
    Route::get('/profile', 'indexController@profile')->name('profile');
    Route::get('/purchase_history', 'indexController@purchase_history')->name('purchase_history');
    Route::get('/register_courses', 'indexController@register_courses')->name('register_courses');



Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);



Route::get('/user', function () {
    return view('user');



})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

//admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::namespace('Auth')->middleware('guest:admin')->group(function (){
        //login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
    });


    Route::middleware('admin')->group(function (){
        Route::get('dashboard','HomeController@index')->name('dashboard');

        Route::resource('levels', LevelController::class);
<<<<<<< HEAD
        Route::resource('subCathegory', LevelController::class);
=======
        Route::resource('category', CategoryController::class);
>>>>>>> 2b7d42c3f505b9dbd36833a5bd8073f6a07d8110


    });

    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});

Route::get('/{locale}', 'LocalizationController@index');
