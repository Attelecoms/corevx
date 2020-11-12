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
Route::get('/', 'HomeController@welcome');
Route::get('index', 'HomeController@home');
Route::get('about', 'HomeController@about');
Route::get('course', 'HomeController@course');

//Route::get('contact', 'HomeController@contact');
Route::get('contact', 'ContactMessageController@create');
Route::get('blog', 'HomeController@blog');
Route::post('/contact', ['uses'=> 'ContactMessageController@store','as'=>'contact.store']);

Auth::routes(['verify'=>true]);

Route::get('/home', 'CourseController@index')->name('home');
Route::get('/home', 'CourseController@index')->name('home');
Route::get('/download/{file}','ItemController@download')->name('download');
Route::get('/privacy', function () {
    return view('privacy_policy');
});
Route::get('/tos', function(){
    return view('terms_of_service');
});
Route::get('/refund', function () {
    return view('refunds');
});
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categories', 'CategoryController')->middleware('auth');
//courses
Route::resource('courses', 'CourseController')->middleware('auth');
Route::post('courses/disapprove', 'CourseController@disapprove')->name('courses.disapprove');
Route::post('courses/approve', 'CourseController@approve')->name('courses.approve');
Route::post('courses/publishCourse', 'CourseController@publishCourse')->name('courses.publishCourse');
Route::post('courses/unpublisheCourse', 'CourseController@unpublishCourse')->name('courses.unpublishCourse');
Route::post('courses/tokenCourse', 'CourseController@tokenCourse')->name('courses.tokenCourse');
Route::post('users/become-instructor', 'UserController@become_instructor')->name('users.become-instructor');
Route::resource('comments', 'CommentController');

Route::resource('courseUsers', 'CourseUserController');

Route::resource('items', 'ItemController');

Route::resource('payments', 'PaymentController');

Route::resource('users', 'UserController');

Route::resource('views', 'ViewsController');

Route::resource('roles', 'RoleController');

Route::resource('coupons', 'CouponController');

Route::resource('catergories', 'CatergoryController');


Route::resource('courseOutlines', 'Course_outlinesController');
