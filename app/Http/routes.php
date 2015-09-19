<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'site.home', function() {
    return view('site.home.index');
}]);

Route::get('blog',['as' => 'site.blog.index', function() {
    return view('site.post.index');
}]);

Route::get('blog/detalhe/{id?}', ['as' => 'site.blog.detalhe', function(){
    return view('site.post.detalhe');
}]);