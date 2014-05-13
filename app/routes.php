<?php
Route::get( '/', 'BlogController@index' );
Route::post( 'admin/login', 'AdminController@login' );
Route::get( 'admin/login', 'AdminController@login' );
Route::resource( 'captcha', 'CaptchaController' );
Route::resource( 'admin', 'AdminController' );
