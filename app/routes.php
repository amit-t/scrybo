<?php
Route::get( '/', 'BlogController@index' );
Route::resource( 'captcha', 'CaptchaController' );
Route::resource( 'admin', 'AdminController' );
