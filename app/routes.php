<?php


Route::get('/', ['as' => 'auth', 'uses' => function()
{
    if(Auth::check()) {
        return Redirect::route('userMainPage');
    }
    return View::make('auth.authpage');
}]);

//filter: routes are accessible only by guest users
Route::get('/signup', function()
{
    if(Auth::check()) {
        return Redirect::route('userMainPage');
    }
    return View::make('register.signup');
});

//Сross Site Request Forgery
Route::group(array('before' => 'csrf'), function()
{
    Route::post('/signup', ['as' => 'createUser', 'uses' => 'UserController@createUser']);
    Route::post('/', ['as' => 'loginUser', 'uses' => 'UserController@loginUser']);
});

Route::group(array('before' => 'auth'), function()
{
    Route::get('/main', ['as' => 'userMainPage', 'uses' => 'UserController@mainPage']);
    Route::get('/profile', ['as' => 'profile', 'uses' => 'ProfileController@getProfile']);
    Route::get('/editProfile', ['as' => 'editProfile', 'uses' => 'ProfileController@editProfile']);
    Route::post('/updateProfile', ['as' => 'updateProfile', 'uses' => 'ProfileController@updateProfile']);

});

Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});

//////////ERROR HANDLER
//App::error(function(ModelNotFoundException $e)
//{
////    return Response::make('Not Found', 404);
//    return Redirect::to('/');
//});
//
//App::missing(function($e)
//{
////    return Response::make('Not Found', 404);
//    return Redirect::to('/');
//});

# Profile
