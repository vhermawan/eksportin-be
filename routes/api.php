<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/courses/{category}',  'CourseController@getCourses');

Route::get('/umkms/{category}',  'UmkmController@getUmkms');
Route::get('/umkm-detail/{slug}',  'UmkmController@getDetailUmkm');
Route::get('/lasted-umkms/{category}',  'UmkmController@getLastUmkm');

Route::get('/news/{category}',  'NewsController@getNews');
Route::get('/lasted-news',  'NewsController@getLastNews');
Route::get('/news-detail/{slug}',  'NewsController@getDetailNews');
Route::get('/news-corelate/{category}',  'NewsController@getCorelateNews');
Route::post('/like-news/{id}',  'NewsController@likeNews');
Route::post('/unlike-news/{id}',  'NewsController@unLikeNews');
Route::get('/get-like-news/{id}',  'NewsController@getLikeNews');

Route::get('/stakeholders/{category}',  'StakeholderController@getStakeholders');  
Route::get('/stakeholder-detail/{slug}',  'StakeholderController@getDetailStakeholder');
Route::post('/search-stakeholder/{category}', 'StakeholderController@searchStakeholder');

Route::get('/buyers/{category}',  'BuyerController@getBuyers');
Route::get('/buyer-detail/{slug}',  'BuyerController@getDetailBuyer');
Route::post('/search-buyer/{category}', 'BuyerController@searchBuyer');

Route::group(['middleware' => ['auth:api']], function() {
  Route::get('/course-detail/{slug}',  'CourseController@getDetailCourseAndRegisterCourse');
  Route::get('/course-speaker/{id_speaker}',  'CourseController@getCourseBySpeakers');
  Route::get('/course-umkm',  'ProfileController@getListRegisteredCourses');
  Route::post('/change-profile/{id}',  'ProfileController@changeProfile');
  Route::post('/change-password',  'ProfileController@changePassword');
  Route::delete('/delete-course-umkm/{id}',  'ProfileController@deleteCourse');
});

Route::get('activate/{id}', 'AuthController@activateUser');

Route::group([
  'prefix' => 'auth'
], function () {
  Route::post('login', 'AuthController@login');
  Route::post('register', 'AuthController@register');
  Route::group([
    'middleware' => 'auth:api'
  ], function() {
    Route::post('logout', 'AuthController@logout');
    Route::get('user', 'AuthController@user');
  });
});

Route::get('category-news', 'MasterController@getCategoryNews');
Route::get('category-buyers', 'MasterController@getCategoryBuyers');
Route::get('category-stakeholders', 'MasterController@getCategoryStakeholders');
Route::get('category-umkms', 'MasterController@getCategoryUmkms');
Route::get('category-courses', 'MasterController@getCategoryCourses');

Route::group([ 
    'prefix' => 'password'
], function () {    
    Route::post('create', 'PasswordResetController@create');
    Route::get('find/{token}', 'PasswordResetController@find');
    Route::post('reset/{token}', 'PasswordResetController@reset');
});