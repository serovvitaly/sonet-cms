<?php

Route::filter('admin_auth', function()
{
    //if (Auth::guest()) return Redirect::to('auth/login');
});


//Route::filter('pattern: admin/*', 'admin_auth');

Route::controller(Controller::detect('admin'));
