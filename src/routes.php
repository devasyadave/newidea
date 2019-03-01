<?php
Route::get('start', function () {
    session_id('connector');
    session_start();
    include_once 'index.php';
});

Route::get('register.php', function () {
    include_once 'register.php';
    include_once 'jsLoader.php';
    return view('newidea::registerView');
});

Route::post('register.php', function () {
    include_once 'register.php';
    include_once 'jsLoader.php';
    return view('newidea::registerView');
});

Route::get('account.php', function () {
    include_once 'account.php';
    include_once 'jsLoader.php';
    return view('newidea::accountView');
});

Route::get('admin_login.php', function () {
    include_once 'admin_login.php';
    include 'jsLoader.php';
    return view('newidea::adminLoginView');
});

Route::post('admin_login.php', function () {
    include_once 'admin_login.php';
    include 'jsLoader.php';
    return view('newidea::adminLoginView');
});

Route::get('login', function () {
    include_once 'login.php';
});
