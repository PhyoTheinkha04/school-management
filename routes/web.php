<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleAuthController;


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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


Route::get('/', 'HomeController@index');
Route::get('about', 'AboutController@index')->name('about');
Route::get('contact', 'ContactController@index')->name('contact');
Route::get('faq', 'FaqController@index')->name('faq');

Route::get('course', 'CourseController@index')->name('course');
Route::get('course/{campus}', 'CourseController@campus')->name('course.campus');
Route::get('course/{campus}/{id}', 'CourseController@detail')->name('course.detail');



Route::get('news', 'NewsController@index')->name('news');
Route::get('news/{id}', 'NewsController@view')->name('news.detail');

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

// Uncomment the below Routes if you want to use it
Route::get('local', 'LocalClassController@index')->name('local');
Route::get('online', 'OnlineClassController@index')->name('online');



Route::middleware(['auth'])->group(function (){

    // Uncomment the below Routes if you want to use it
    // Route::get('profile', 'ProfileController@index')->name('profile');
    // Route::get('purchase_history', 'PurchaseController@index')->name('purchase_history');
    // Route::get('register_courses', 'RegisterController@index')->name('register_courses');

    Route::get('user',[UserController::class, 'index'])->name('user') ;
    Route::get('profile',[UserController::class, 'profile'])->name('user.profile') ;
    Route::get('purchase_history',[UserController::class, 'purchase_history'])->name('user.purchase_history') ;
    Route::get('registered_courses',[UserController::class, 'registered_courses'])->name('user.registered_courses') ;
});


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
        Route::any('new/search', "NewsController@search");
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
// Route::get('/{locale}/home', 'LocalizationController@index');


