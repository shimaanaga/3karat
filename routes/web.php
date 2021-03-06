<?php


/* admin routes*/

Route::group(['middleware' => ['web','admin']], function(){


    //Datatable Ajax
    Route::get('/adminpanel/users/data', ['as'=>'adminpanel.users.data' ,'users'=>'UsersController@anyData']);
    Route::get('/adminpanel/bu/data', ['as'=>'adminpanel.bu.data' ,'users'=>'BuController@anyData']);
    Route::get('/adminpanel/contact/data', ['as'=>'adminpanel.contact.data' ,'users'=>'ContactController@anyData']);




    Route::get('/adminpanel','AdminController@index');
    Route::resource('/adminpanel/users','UsersController');
    Route::post('/adminpanel/user/changepassword','UsersController@updatePassword');
    Route::get('/adminpanel/users/{id}/delete','UsersController@destroy');


    /*
    Route::get('/adminpanel/users/create','UsersController@create');
    Route::post('/adminpanel/users/create','UsersController@store');
    Route::get('/adminpanel/users/{id}/edit','UsersController@edit');
    Route::post('/adminpanel/users/update','UsersController@update');
    */

    //setting site
    Route::get('/adminpanel/sitesetting','SiteSettingController@index');
    Route::post('/adminpanel/sitesetting','SiteSettingController@store');


    //bu
    //Route::resource('/adminpanel/bu','BuController');
    Route::get('/adminpanel/bu','BuController@index');
    Route::get('/adminpanel/bu/create','BuController@create');
    Route::post('/adminpanel/bu/create','BuController@store');
    Route::get('/adminpanel/bu/{id}/edit','BuController@edit');
    Route::post('/adminpanel/bu/{id}','BuController@update');
    Route::get('/adminpanel/bu/new','BuController@new_building');
    Route::get('/adminpanel/bu/{id}/delete','BuController@destroy');


    // Contacts
    Route::get('/adminpanel/contact','ContactController@index');
    Route::get('/adminpanel/contact/newmessages','ContactController@newMessage');
    Route::get('/adminpanel/contact/{id}/edit','ContactController@edit'); // to open message with id
    Route::post('/adminpanel/contact/update/{id}','ContactController@update');
    Route::get('/adminpanel/contact/{id}/delete','ContactController@delete');

});




/* user routes*/


Route::get('/test', function () {
    return view('layouts.test');
});




Route::group(['middleware' => 'web'], function(){

    Auth::routes();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/showAllBuildings','BuController@showAllEnableBuildings');
    Route::get('/ForRent','BuController@ForRent');
    Route::get('/Buy ','BuController@ForBuy');

    Route::get('/type/{type}','BuController@showByType');
    Route::get('/search','BuController@search');
    Route::get('/singleBuilding/{id}','BuController@showSingleBuilding');

    Route::get('/ajax/bu/information','BuController@getAjaxInfo');

    Route::get('/contact','HomeController@contact');
    Route::post('/contact','ContactController@store');

    // user add building routes
    Route::get('/user/create/building', 'BuController@userAddBuilding');
    Route::post('/user/create/building', 'BuController@userStoreBuilding');

    Route::get('/user/buildingShow', 'BuController@showUserBuildings')->middleware('auth');
    Route::get('/user/buildingShowWaiting', 'BuController@showUserBuildingsWaiting')->middleware('auth');


    // user edit profile
    Route::get('/user/editProfile', 'usersController@userEditProfile')->middleware('auth');
    Route::post('/user/editProfile', 'usersController@userUpdateProfile')->middleware('auth');



    Route::get('/home', 'HomeController@index')->name('home');


});