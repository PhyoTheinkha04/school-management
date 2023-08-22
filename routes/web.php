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
    Route::get('/', 'HomeController@index');
    // Route::get('/{locale}', 'HomeController@index')->name('home');
    Route::get('/{locale}/about', 'AboutController@index')->name('about');
    Route::get('/{locale}/local', 'LocalClassController@index')->name('local');
    Route::get('/{locale}/online', 'OnlineClassController@index')->name('online');
    Route::get('/{locale}/news', 'NewsController@index')->name('news');
    Route::get('/{locale}/newsDtil', 'NewsDetailController@index')->name('newsDtil');
    Route::get('/{locale}/courseDtil', 'CourseDetailController@index')->name('courseDtil');
    Route::get('/{locale}/contact', 'ContactController@index')->name('contact');
    Route::get('/{locale}/faq', 'FAQController@index')->name('faq');
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::get('/purchase_history', 'PurchaseController@index')->name('purchase_history');
    Route::get('/register_courses', 'RegisterController@index')->name('register_courses');



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
        Route::any('levels/search', "LevelController@search");
        Route::any('news/search', "NewsController@search");
        Route::any('qanda/search', "QandAController@search");
        Route::any('batch/search', "BatchController@search");
        Route::any('category/search', "CategoryController@search");
        Route::any('course/search', "CourseController@search");
        Route::any('instructor/search', "InstructorController@search");
        Route::any('interests/search', "InterestController@search");
        Route::any('subcategory/search', "SubCathegoryController@search");
        Route::any('tags/search', "TagsController@search");






        Route::resource('levels', LevelController::class);

        Route::resource('category', CategoryController::class);
        Route::resource('qanda', QandAController::class);
        Route::resource('subcategory', SubCathegoryController::class);
        Route::resource('tags', TagsController::class);
        Route::resource('new', NewsController::class);
        Route::resource('course', CourseController::class);
        Route::resource('batch', BatchController::class);
        Route::resource('instructor', InstructorController::class);
        Route::resource('interests', interestController::class);




            });

    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});

Route::get('/{locale}', 'LocalizationController@index');
