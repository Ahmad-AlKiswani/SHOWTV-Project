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

//Route::get('/test', function () {
//    return view('welcome');
//});



// User Route

Route::get('/','showController@viewIndex');
Route::get('/index','showController@viewIndex');
Route::get('/ListEpisodes/{id}','showController@viewListEpisodes');
Route::get('/seriesRandomly','showController@viewSeriesRandomly');
Route::post('/postRegistration','AuthController@postRegistration');
Route::post('/postLogin','AuthController@postLogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware'=>'checkLogin'], function(){
    Route::get('/episode/{id}','showController@viewEpisode');
    Route::get('/addLike/{id}' , 'showController@addLike');
    Route::get('/addDislike/{id}' , 'showController@addDislike');



    // Admin Route
    Route::get('/userList','AdminController@viewUserList');
    Route::get('/seriesList','AdminController@viewSeriesList');
    Route::get('/episodesList','AdminController@viewEpisodesList');
    Route::get('/addUser','AdminController@viewAddUser');
    Route::get('/addSeries','AdminController@viewAddSeries');
    Route::get('/addEpisode','AdminController@viewAddEpisode');


    Route::get('/editSeries/{id}','AdminController@viewEditSeries');
    Route::get('/deleteSeries/{id}','AdminController@deleteSeries');

    Route::get('/editEpisodes/{id}','AdminController@viewEditEpisodes');
    Route::get('/deleteEpisodes/{id}','AdminController@deleteEpisodes');

    Route::get('/editUser/{id}','AdminController@viewEditUser');
    Route::get('/deleteUser/{id}','AdminController@deleteUser');


    Route::post('/AddSeries','AdminController@AddSeries');
    Route::post('/AddEpisode','AdminController@AddEpisode');
    Route::post('/AddUser','AdminController@AddUser');

});

Route::get('/login','AdminController@viewLogin');

Route::get('/logoutAdmin','AuthController@logoutAdmin');
Route::post('/loginAdmin','AuthController@loginAdmin');







