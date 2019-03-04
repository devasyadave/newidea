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

Route::get('setup.php', function () {
    include_once 'setup.php';
    include_once 'jsLoader.php';
    return view('newidea::setupView');
});

Route::post('sso.php', function () {
    include_once 'sso.php';
});
    Route::post('', function () {
        include_once 'sso.php';
    });
Route::get('admin_logout.php', function () {
    include_once 'admin_logout.php';
});

Route::get('how_to_setup.php', function () {
    include_once 'how_to_setup.php';
    include_once 'jsLoader.php';
    return view('newidea::howToSetupView');
});

Route::get('support.php', function () {
    include_once 'support.php';
    include_once 'jsLoader.php';
    return view('newidea::supportView');
});

Route::post('account.php', function () {
    include_once 'account.php';
    include_once 'jsLoader.php';
    return view('newidea::accountView');
});

Route::post('setup.php', function () {
    include_once 'setup.php';
    include_once 'jsLoader.php';
    return view('newidea::setupView');
});

Route::post('how_to_setup.php', function () {
    include_once 'how_to_setup.php';
    return view('newidea::howToSetupView');
});


