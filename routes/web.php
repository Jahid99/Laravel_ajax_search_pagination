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

Route::get('/without_pagination', function () {
    return view('welcome');
});

Route::get('/paginate', function () {
    return view('pagination_page');
});

Route::post('/edit', [
    'uses' => 'TeamController@postEditPost',
    'as' => 'edit'
]);

Route::get('/paginate_ajax', [
    'uses' => 'TeamController@postAjax',
    'as' => 'paginate_ajax'
]);

Route::get('/', [
    'uses' => 'TeamController@front_page_view',
    'as' => 'front_page'
]);

Route::get('/getteaminfomembers', 'TeamController@getteaminfo');



// Route::get('/paginate_ajax', 'TeamController@postAjax');