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
Route::group(['prefix'=>'admin','middleware'=>'auth'], function (){
//    admin
    Route::get('/', function (){
        return redirect(route('categories'));

    });

    Route::group(['prefix'=>'categories'], function (){

//        admin/pages
        Route::get('/',['uses'=>'AdminController@categories', 'as'=>'categories']);

        //        admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'AdminController@addCategory','as'=>'categoriesAdd']);

        //        admin/pages/edit/2
        Route::match(['get','post','delete'],'/edit/{servise}',['uses'=>'AdminController@editCategory','as'=>'categoriesEdit']);

    });


    Route::group(['prefix'=>'services'], function (){

//        admin/services
        Route::get('/',['uses'=>'AdminController@services', 'as'=>'services']);

        //        admin/services/add
        Route::match(['get','post'],'/add',['uses'=>'AdminController@addServices','as'=>'servicesAdd']);

        //        admin/services/edit/2
        Route::match(['get','post','delete'],'/edit/{servise}',['uses'=>'AdminController@editServices','as'=>'servicesEdit']);

    });


    Route::group(['prefix'=>'orders'], function (){

        Route::get('/',['uses'=>'AdminController@orders', 'as'=>'orders']);


    });

});


Auth::routes();
Route::get('/', ['uses'=>'HomeController@index', 'as'=>'home']);
Route::get('/home', 'HomeController@index');
Route::get('/mail', 'HomeController@mail');
Route::get('/contact', ['uses'=>'HomeController@contact', 'as'=>'contact']);
Route::get('/soglashenie-ob-ispolzovanii-veb-sajta', ['uses'=>'HomeController@rules', 'as'=>'rules']);
Route::post('/contact', ['uses'=>'HomeController@sendMail', 'as'=>'sendMail']);


Route::get('/price-list', ['uses'=>'HomeController@priceList', 'as'=>'price-list']);
Route::get('/error', ['uses'=>'HomeController@error', 'as'=>'error']);
Route::get('/uslugi/{alias}', ['uses'=>'ServicesController@index']);
Route::get('/{category}/{subcategory}', ['uses'=>'CategoryController@index']);
Route::get('/{category}', function (){
    return redirect(route('error'));
});

