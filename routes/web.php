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

Route::get('/',function () {                  //για την αρχική ,home
  return view('home');
})->name('home');

  Route::get('/welcome', function () {        //για την welcome ,register -signin
      return view('welcome');
  })->name('welcome');

  Route::get('/about', function(){              // ιγα τις πληροφορίες
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


Route::get('/delete-post/{post_id}', [                          // value
  'uses' => 'PostController@getDeletePost',
  'as' => 'post.delete',
  'middleware' => 'auth'
]);


Route::post('/edit', [                           // to route  edit post mas,mesa sto js kai , json pername to message apo tin js
  'uses' => 'PostController@postEditPost',
  'as' => 'edit'
]);


Route::get('/upload', [                                 //για να γινεται upload το αρχειο
  'uses' => 'PostController@getUpload',
  'as' => 'upload',
  'middleware' => 'auth'
]);

Route::post('/pdfbooks',[
  'uses' => 'PostController@postDownload',
  'as' =>'pdfbooks',
  'middleware' => 'auth'
]);


/*

Route::post('/pdfbooks',function() {                  // για να μπαινει στο storage το αρχειο
  $file = request()->file('pdfbook');
$ext = $file->guessClientExtension();
request()->file('pdfbook')->store('pdfbooks');          // στo page/storage/arxeio.txt και τα κανει save
return  back();
 });

/return response()->download($file);      γινεται download στο πισι το pdf

return  $file->storeAs('pdfbooks/' . auth()->id(), "pdfbook.{$ext}");      // τα κανει store και φαινονται και σε ποια κατευθυνση

return response()->file($file);       εκεινη την στιγμη κανεις preview το pdf
*/
