<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

			/*index Route*/

//Event::listen('illuminate.query', function($q) {
//	var_dump($q);
//});
		
/* -------------------------------- General Path ---------------------------------  */


/*
*
* @ route to the home
*/
Route::get('/',array('as' => 'home', function() {
	
    if (Session::has('username')) {
        $action = 'show';
        return App::make('UserController')->$action();  
    }
    else {
        $action = 'index'; 
        return App::make('UserController')->$action();
    }
}));






Route::filter('profAuth', function()
{
   
        if (Auth::user()->type) {
           
            return View::make('teach');

        }else return View::make('learn');
});




/*
*
* @ route to the user video
*/
Route::get('teach', array('as' => 'teach', 'before' => 'profAuth'));



/*
*
* @ route to the user pdf
*/
Route::get('learn', array('as' => 'learn', function()
{
    //
    return View::make('learn');
}));









Route::filter('adminAuth', function()
{
   
        if (Auth::user()->admin) {
           
            return View::make('admin');

        }else return 'you are not an admin';
});

/*
*
* @ route to the user pdf
*/
Route::get('Admin', array('as' => 'admin', 'before' => 'adminAuth'));






/*
*
* @ route to the user profile
*/

Route::get('profile', array('as' => 'profile', function()
{
    //
    return View::make('profile');
}));






/* -------------------------------- UserController ---------------------------------  */


Route::post('Authentification' , array( 'as' => 'Authentification' , 'uses'=>'UserController@Authentification'));


Route::get('logout',array ( 'as' => 'logout' , 'uses' => 'UserController@logout'))	;

Route::post('change',array ( 'as' => 'change' , 'uses' => 'UserController@change'))	;

//Route::get('login' , array( 'as' => 'login' , 'uses'=>'UserController@login'));


Route::post('prepare','UserController@test');

Route::post('registration','UserController@register');


/* -------------------------------- ProfController ---------------------------------  */

Route::post('AddCours',array ( 'as' => 'AddCours' , 'uses' => 'ProfController@AddCours'))  ;






/* -------------------------------- AdminController ---------------------------------  */


Route::get('makeAdmin/{id}',array ( 'as' => 'makeAdmin' , 'uses' => 'AdminController@makeAdmin'))  ;

Route::get('makeProf/{id}',array ( 'as' => 'makeProf' , 'uses' => 'AdminController@makeProf'));


