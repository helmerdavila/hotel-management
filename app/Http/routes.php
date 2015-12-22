<?php

Route::group([
    'prefix'     => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect'],
], function () {

    App::setLocale(LaravelLocalization::getCurrentLocale());

    get('/', function () {
        return view('welcome');
    });

    // Authentication routes...
    get('login', ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']);
    post('login', 'Auth\AuthController@postLogin');
    get('logout', 'Auth\AuthController@getLogout');

    // Password reset link request routes...
    get('password/email', 'Auth\PasswordController@getEmail');
    post('password/email', 'Auth\PasswordController@postEmail');

    // Password reset routes...
    get('password/reset/{token}', 'Auth\PasswordController@getReset');
    post('password/reset', 'Auth\PasswordController@postReset');

    // Dashboard routes
    get('/dashboard', function () {
        return 'Login successfull, please write /logout up to close session';
    });
});
