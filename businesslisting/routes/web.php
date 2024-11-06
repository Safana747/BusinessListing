<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Web@index')->name('home');




Route::group(['prefix'=>'admin1'], function() {

Route::get('/admin', 'admin\Admin@admin')->name('admin');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/', 'Web@home')->name('home');
Route::get('/about','Web@about')->name('about');
Route::get('/listing/addlisting', 'Mylist@listing')->name('listing');
Route::get('/packages', 'Web@packages')->name('packages');
Route::get('/locations', 'Web@locations')->name('locations');
Route::get('/dashboard', 'Web@dashboard')->name('dashboard');
Route::get('/myprofile', 'ProfileController@myprofile')->name('myprofile');
Route::get('/mylist', 'Mylist@index')->name('mylist');
Route::post('/myprofile', 'ProfileController@update')->name('proupdate');
Route::post('/profilephoto', 'ProfileController@profilephotoupdate')->name('profilephotoupdate');
Route::get('/profilephotodelete', 'ProfileController@profilephotodelete')->name('profilephotodelete');
Route::get('/listing/addlisting', 'Mylist@addlisting')->name('listing');
Route::post('/listing/savelisting', 'Mylist@save')->name('savelisting');
Route::get('/listingdetails/{seourl}', 'Web@listingdetails')->name('listingdetails');



//Ajax
Route::post('/getdistrict', 'Mylist@getdistrict')->name('getdistrict');
Route::post('/getlocation', 'Mylist@getlocation')->name('getlocation');
Route::get('/searchresult', 'Web@searchresult')->name('searchresult');


//Route::post('/category', 'Mylist@category')->name('category');




