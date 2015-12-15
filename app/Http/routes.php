<?php

get('/', function () {
    return view('welcome');
});

// Authentication routes...
get('login', 'Auth\AuthController@getLogin');
post('login', 'Auth\AuthController@postLogin');
get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
get('register', 'Auth\AuthController@getRegister');
post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
get('password/email', 'Auth\PasswordController@getEmail');
post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
get('password/reset/{token}', 'Auth\PasswordController@getReset');
post('password/reset', 'Auth\PasswordController@postReset');
