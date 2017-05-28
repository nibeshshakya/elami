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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@returnView');


Route::get('/main', ['uses'=>'HomeController@index','as'=>'main']);
Route::get('/about', ['uses'=>'HomeController@showAbout','as'=>'about']);
Route::get('/contact', ['uses'=>'HomeController@showContact','as'=>'contact']);
Route::get('/notes', ['uses'=>'HomeController@showNotes','as'=>'notes']);


Route::get('/new', ['uses'=>'HomeController@showNew']);

//tala ko from ko ho
Route::get('/form1', ['uses'=>'HomeController@showForm']);
Route::get('/blog/show', ['uses'=>'HomeController@displayPosts']);//

Route::get('/blog/name', ['uses'=>'HomeController@getName']);

Route::get('/create',['uses'=>'HomeController@insert','as'=>'create']);


//for bike boy page

Route::get('/bikerboy', 'HomeController@showBikes');
Route::get('/create', 'HomeController@showCreate');


//Route::post('test/register', array('uses'=>'TestController@create'));



// for lami




Route::get('/lami/login', 'HomeController@showLogin');


//for crud operation


Route::get('/product',['uses'=>'ProductController@showIndex']);
Route::get('/product', ['uses' => 'ProductController@showIndex', 'as' => 'listproduct']);




    //feri route

Route::group(['prefix' => 'product', 'middleware' => 'auth'], function(){
    Route::get('/', ['uses' => 'ProductController@showIndex', 'as' => 'listproduct']);
    Route::get('/create', ['uses' => 'ProductController@showProductForm', 'as' => 'addproduct']);
    Route::get('/edit/{id}', ['uses' => 'ProductController@getSingleProduct', 'as' => 'editproduct']);
    Route::get('/delete/{id}', ['uses' => 'ProductController@deleteProduct', 'as' => 'deleteproduct']);
    Route::post('/create', ['uses' => 'ProductController@insertProduct', 'as' => 'insertproduct']);
    Route::post('/update', ['uses' => 'ProductController@updateProduct', 'as' => 'updateproduct']);
});


//for nav bar
Route::get('/navbar', function () {
    return view('lami.nav');
});



//for elami project

Route::get('/lami/home', ['uses'=> 'HomeController@showHome', 'as' =>'home']);

//Route::get('/lami/register', ['uses' => 'HomeController@showRegister', 'as' => 'register']);
Route::get('/home', ['uses' => 'HomeController@showRegister', 'as' => 'register']);
Route::post('/lami/register', ['uses' => 'HomeController@insertName', 'as' => 'insert']);

Route::get('/lami', ['uses' => 'HomeController@showIndex', 'as' => 'list'])->middleware('auth');
//for additional info
Route::get('/lami/addinfo', ['uses'=> 'HomeController@addInfo', 'as' =>'addinfo']);
Route::post('/lami/addinfo', ['uses'=> 'HomeController@insertInfo', 'as' =>'insertinfo']);

// for login
Route::post('/lami/login', ['uses'=> 'LoginController@authenticate', 'as' =>'login']);
//for logouts
Route::get('/logout', ['uses'=>'LoginController@Logout','as'=>'logout']);
Route::get('/register', ['uses'=>'LoginController@showRegister','as'=>'showreg']);
//Route::get('/register', 'LoginController@showRegister');
Route::get('/register', ['uses'=>'LoginController@showRegister','as'=>'showreg']);
Route::post('/register', ['uses'=> 'LoginController@registerUser', 'as' =>'registeruser']);


//for about
Route::get('/about', ['uses' => 'HomeController@showAbout', 'as' => 'about']);
Route::get('/contacts', ['uses' => 'HomeController@showContacts', 'as' => 'contacts']);


//Auth::routes();

//Route::get('/home', 'HomeController@index');

//for search

Route::get('/lami/search', ['uses'=> 'HomeController@showSearch', 'as' =>'search']);


Route::post('/lami/searchquery', ['uses'=> 'HomeController@search', 'as' =>'searchquery']);
Route::get('/lami/advancesearch', ['uses'=> 'HomeController@advanceSearch', 'as' =>'advancedsearch']);

Route::post('/lami/advancequery', ['uses'=> 'HomeController@advance', 'as' =>'advancequery']);
//Route::get('/lami/search', function(){
//    echo "inside route file";
//});

//for profile

Route::get('/lami/profile', ['uses'=> 'HomeController@viewProfile', 'as' =>'profile']);