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


//index page
Route::get('/', 'PostsController@index')->name('home');
Route::get('listc', 'PostsController@listcourses');

// Route::get('mail', 'MailsController@mail');

//admin links
Route::get('adminpanel', 'AdminController@admin');
Route::get('/adminlogin', 'AdminController@login');
Route::get('/adminsignup', 'AdminController@signup');
Route::get('/forgetpassadmin', 'AdminController@forgetpass');
Route::get('/addadmin', 'AdminController@add');
Route::get('/adminlogin','Controllers\AdminController@adminlogin');
Route::get('adminlogout','Controllers\AdminController@adminlogout');



// Route::group(['prefix'=> 'admin','middleware'=>'auth'])->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('adminindex', 'PostsController@adminindex');
    
// });


Route::middleware(['auth'])->group(function () {
   //HOMEPAGE 
    Route::get('home', 'PostsController@home')->name('welcome');

    //contact us and recieving a quotes
    Route::get('msg','AdminmsgController@msg');
    Route::get('try','AdminController@try');
    Route::get('tryto','AdminController@tryto');
    Route::get('trytoa','AdminController@post');
    
    
    
    Route::post('/contact/submit', 'MessagesController@create');
    Route::post('/qoutes','QoutesController@quote');
    //end of contact us and recieving a quotes
    
    //creating/show/edit/delete a post 
    Route::get('posts/create', 'PostsController@create');
    Route::post('/posts', 'PostsController@store');
    Route::get('/views', 'PostsController@show');
    Route::get('/posts/{post}','PostsController@reply');
    // Route::get('/posts/{inbox}','PostsController@inbox');
    
    // Route::get('/posts/tags/{tag}','PostsController@show');
    
    
    Route::get('/view', 'PostsController@list');
    Route::get('/reply', 'PostsController@reply');
   
    //end of creating a post

    
    //generation of pins // admin panel
    Route::get('enterpin','PinsController@enterpin');
    Route::post('enterpin','PinsController@create');
    
    //end of links with generation of pins


    //enter your pin to post questions
    Route::get('/enter','PostsController@enter');    
    Route::post('/enter','PostsController@enterstore');
    // end

});



    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/signup', 'RegistrationsController@signup');
    Route::post('/signup', 'RegistrationsController@create');
    Route::get('/logout', 'SessionsController@destroy');
    //end

    
    Route::get('contactus','Admincontroller@contactus');    
    

