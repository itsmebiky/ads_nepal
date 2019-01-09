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
Route::get('/', 'FrontController@index' );
Route::get('/show/{show}', 'FrontController@show' );
Route::get('/aboutus', 'FrontController@aboutus' );
Route::get('/contactus', 'FrontController@contactus' );

// Route::get('/search', 'SearchController@index')->name('search');
// Route::post('/search/fetch', 'SearchController@fetch')->name('autocomplete.fetch');
// Route::get('/admin', 'BackendController@home' );
// Route::get('/admin/createpost', 'BackendController@createpost' );
// Route::get('/admin/viewpost', 'BackendController@viewpost' );

Route::resource('admin/backend/category', 'CategoryController');
Route::resource('admin/backend/adscategory', 'AdsCategoryController');
Route::resource('admin/backend', 'PostsController');

Route::get('view/{image}', function ($image) {
    $path = storage_path('app/public/ads_image/').$image;

    $file = \File::get($path);
    $type = \File::mimeType($path);

    $response = \Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('image.view');

Auth::routes();

Route::get('/admin/backend', 'HomeController@index');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('/show/{show}/comments', 'CommentsController@store' );
 
