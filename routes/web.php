<?php
//use RealRashid\SweetAlert\Facades\Alert;

/**
 *  * Author   : cherki hamza
 *  ? Site     : cherki-hamza.com
 *  ! Country  : Morocco
 *  TODO dev   : developer web ful stack
 */

// Route::get('/', 'PostController@index')->name('home');
// Route::get('/posts', 'PostController@posts')->name('posts.show');

Route::get('/' , function (){
    //Alert::success('Success Title', 'Success Message');
    //toast('Info Toast','info');
    //toast('Question Toast','question');

    return view('welcome');
});
Route::resource('/todos','TodoController');

Route::get('/' , function (){
   return view('welcome');
});





// Route::get('/{locale}/hamza' , function ($locale) {

         //App::setLocale($locale);
//    return view('Welcom to cherki hamza developer web full stack');

// });

