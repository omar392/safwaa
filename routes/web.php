<?php

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


Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){
    
// for frontend multi language
Route::get('/','App\Http\Controllers\frontend\FrontsController@index')->name('fronts.index');
Route::get('/aboutus','App\Http\Controllers\frontend\FrontsController@aboutus')->name('fronts.aboutus');
Route::get('/services','App\Http\Controllers\frontend\FrontsController@services')->name('fronts.services');
Route::get('/blog','App\Http\Controllers\frontend\FrontsController@blog')->name('fronts.blog');
Route::get('/gallery','App\Http\Controllers\frontend\FrontsController@gallery')->name('fronts.gallery');
Route::get('/questions','App\Http\Controllers\frontend\FrontsController@questions')->name('fronts.questions');
Route::get('/team','App\Http\Controllers\frontend\FrontsController@team')->name('fronts.team');
Route::get('/contactus','App\Http\Controllers\frontend\FrontsController@contactus')->name('fronts.contactus');//view
Route::post('/contactus/store','App\Http\Controllers\frontend\FrontsController@storecontactus')->name('fronts.contactus.store');//store


});

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
//social media accounts//
Route::prefix('social')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\SocialmediaController@view')->name('social.view');
    Route::get('/add','App\Http\Controllers\Dashboard\SocialmediaController@add')->name('social.add');
    Route::post('/store','App\Http\Controllers\Dashboard\SocialmediaController@store')->name('social.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\SocialmediaController@edit')->name('social.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\SocialmediaController@update')->name('social.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\SocialmediaController@delete')->name('social.delete');
});

//members in the team //
Route::prefix('members')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\MembersController@view')->name('members.view');
    Route::get('/add','App\Http\Controllers\Dashboard\MembersController@add')->name('members.add');
    Route::post('/store','App\Http\Controllers\Dashboard\MembersController@store')->name('members.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\MembersController@edit')->name('members.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\MembersController@update')->name('members.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\MembersController@delete')->name('members.delete');
});

//company services //
Route::prefix('services')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\servicesController@view')->name('services.view');
    Route::get('/add','App\Http\Controllers\Dashboard\servicesController@add')->name('services.add');
    Route::post('/store','App\Http\Controllers\Dashboard\servicesController@store')->name('services.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\servicesController@edit')->name('services.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\servicesController@update')->name('services.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\servicesController@delete')->name('services.delete');
});

//customers 
Route::prefix('customers')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\CustomersConrtoller@view')->name('customers.view');
    Route::get('/add','App\Http\Controllers\Dashboard\CustomersConrtoller@add')->name('customers.add');
    Route::post('/store','App\Http\Controllers\Dashboard\CustomersConrtoller@store')->name('customers.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\CustomersConrtoller@edit')->name('customers.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\CustomersConrtoller@update')->name('customers.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\CustomersConrtoller@delete')->name('customers.delete');
});

//isues counter
Route::prefix('isues')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\IsuesController@view')->name('isues.view');
    Route::get('/add','App\Http\Controllers\Dashboard\IsuesController@add')->name('isues.add');
    Route::post('/store','App\Http\Controllers\Dashboard\IsuesController@store')->name('isues.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\IsuesController@edit')->name('isues.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\IsuesController@update')->name('isues.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\IsuesController@delete')->name('isues.delete');
});

//new news in the company
Route::prefix('news')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\NewsGoalsController@view')->name('news.view');
    Route::get('/add','App\Http\Controllers\Dashboard\NewsGoalsController@add')->name('news.add');
    Route::post('/store','App\Http\Controllers\Dashboard\NewsGoalsController@store')->name('news.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\NewsGoalsController@edit')->name('news.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\NewsGoalsController@update')->name('news.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\NewsGoalsController@delete')->name('news.delete');
});

// message and goals
Route::prefix('goals')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\DefentionController@view')->name('goals.view');
    Route::get('/add','App\Http\Controllers\Dashboard\DefentionController@add')->name('goals.add');
    Route::post('/store','App\Http\Controllers\Dashboard\DefentionController@store')->name('goals.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\DefentionController@edit')->name('goals.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\DefentionController@update')->name('goals.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\DefentionController@delete')->name('goals.delete');
});

//sliders 
Route::prefix('sliders')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\SliderController@view')->name('sliders.view');
    Route::get('/add','App\Http\Controllers\Dashboard\SliderController@add')->name('sliders.add');
    Route::post('/store','App\Http\Controllers\Dashboard\SliderController@store')->name('sliders.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\SliderController@edit')->name('sliders.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\SliderController@update')->name('sliders.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\SliderController@delete')->name('sliders.delete');
});

//galeries
Route::prefix('galeries')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\GaleryController@view')->name('galeries.view');
    Route::get('/add','App\Http\Controllers\Dashboard\GaleryController@add')->name('galeries.add');
    Route::post('/store','App\Http\Controllers\Dashboard\GaleryController@store')->name('galeries.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\GaleryController@edit')->name('galeries.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\GaleryController@update')->name('galeries.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\GaleryController@delete')->name('galeries.delete');
});

//Questions
Route::prefix('questions')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\QuestionsController@view')->name('questions.view');
    Route::get('/add','App\Http\Controllers\Dashboard\QuestionsController@add')->name('questions.add');
    Route::post('/store','App\Http\Controllers\Dashboard\QuestionsController@store')->name('questions.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\QuestionsController@edit')->name('questions.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\QuestionsController@update')->name('questions.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\QuestionsController@delete')->name('questions.delete');
});

//aboutus
Route::prefix('aboutus')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\AgentsController@view')->name('aboutus.view');
    Route::get('/add','App\Http\Controllers\Dashboard\AgentsController@add')->name('aboutus.add');
    Route::post('/store','App\Http\Controllers\Dashboard\AgentsController@store')->name('aboutus.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\AgentsController@edit')->name('aboutus.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\AgentsController@update')->name('aboutus.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\AgentsController@delete')->name('aboutus.delete');
});

//Blog
Route::prefix('blogs')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\BlogsController@view')->name('blogs.view');
    Route::get('/add','App\Http\Controllers\Dashboard\BlogsController@add')->name('blogs.add');
    Route::post('/store','App\Http\Controllers\Dashboard\BlogsController@store')->name('blogs.store');
    Route::get('/edit/{id}','App\Http\Controllers\Dashboard\BlogsController@edit')->name('blogs.edit');
    Route::post('/update/{id}','App\Http\Controllers\Dashboard\BlogsController@update')->name('blogs.update');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\BlogsController@delete')->name('blogs.delete');
});

//income from contactus
Route::prefix('message_income')->group(function(){
    Route::get('/view','App\Http\Controllers\Dashboard\ContactusController@view')->name('contactus.view');
    Route::get('/delete/{id}','App\Http\Controllers\Dashboard\ContactusController@delete')->name('contactus.delete');
});

});