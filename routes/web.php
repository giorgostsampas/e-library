<?php

Auth::loginUsingId(1);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/










Route::group(['middleware' => ['web']],function() {});

Route::get('/',function () {
  return view('home');
})->name('home');

  Route::get('/welcome', function () {
      return view('welcome');
  })->name('welcome');

  Route::get('/about', function(){
    return view('about');
  })->name('about');

  Route::get('/contact', [                                     //για την φόρμα contact
    'uses' => 'ContactController@contact',
    'as' => 'contact'
]);
Route::post('/contact', [                                       //για την φόρμα contact
  'uses' => 'ContactController@contactPost',
  'as' => 'contact.store'
]);


  Route::post('/register', [
    'uses' => 'UserController@postRegister',
    'as' =>'register'
  ]);

  Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' =>'signin'
  ]);

  Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' =>'logout'
  ]);

  Route::get('/account', [
      'uses' => 'UserController@getAccount',
      'as' => 'account'
  ]);
  Route::post('/upateaccount', [
      'uses' => 'UserController@postSaveAccount',
      'as' => 'account.save'
  ]);
  Route::get('/userimage/{filename}', [
      'uses' => 'UserController@getUserImage',
      'as' => 'account.image'
  ]);

Route::get('/dashboard', [
  'uses' => 'PostController@getDashboard',
  'as' => 'dashboard',
  'middleware' => 'auth'
]);

 Route::post('/createpost', [
 'uses' => 'PostController@postCreatePost',
 'as' => 'post.create',
 'middleware' => 'auth'
]);



Route::get('/delete-post/{post_id}', [                          //oti den einai ena normal route ,alla value enos variable,
  'uses' => 'PostController@getDeletePost',
  'as' => 'post.delete',
  'middleware' => 'auth'
]);

// to route  edit post mas,mesa sto js kai  dashbord  katw, json pername to message apo tin js
Route::post('/edit', [
  'uses' => 'PostController@postEditPost',
  'as' => 'edit'
]);

Route::post('/like', [
  'uses' => 'PostController@postLikePost',
  'as' => 'like'
]);




//Route::group(['middleware' => ['web']],function() {

// Route::get('/upload',function() {                 //για να γινεται upload το αρχειο
//return view('upload');
//});

Route::get('/upload', [                                 //για να γινεται upload το αρχειο
  'uses' => 'PostController@getUpload',
  'as' => 'upload',
  'middleware' => 'auth'
]);


//Route::post('/pdfbooks',function() {                  // για να μπαινει στο storage το αρχειο
  //$file = request()->file('pdfbook');
//$ext = $file->guessClientExtension();
//request()->file('pdfbook')->store('pdfbooks');  //διαβαζοντε στo page/storage/arxeio.txt και τα κανει save
//return  back();
// });
//
//
//return response()->download($file);      γινεται download στο πισι το pdf

//return  $file->storeAs('pdfbooks/' . auth()->id(), "pdfbook.{$ext}");      // τα κανει στορε και φαινονται και σε ποια κατευθυνση

//return response()->file($file);       εκεινη την στιγμη κανεις preview το pdf




Route::post('/pdfbooks',[
  'uses' => 'PostController@postDownload',
  'as' =>'pdfbooks',
  'middleware' => 'auth'
]);
