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
           
            return Redirect::to('teachh');

        }else return View::make('learn');
});




/*
*
* @ route to the user video
*/
Route::get('teach', array('as' => 'teach', 'before' => 'profAuth'));

Route::get('teachh', array('as' => 'teachh','uses'=>'ProfController@showCours'));



/*
*
* @ route to the user pdf
*/
Route::get('learn', array('as' => 'learn', function()
{
    //
    return View::make('learn');
}));

/*
*
* @ route to the user pdf
*/
Route::get('streaming', array('as' => 'streaming', function()
{
    //
    return View::make('streaming');
}));

/*
*
* @ route to the user pdf
*/
Route::get('cal', array('as' => 'cal', function()
{
    //
    return View::make('cal');
}));



/*
*
* @ route to the addto
*/

Route::get('addvideo', array('as' => 'addvideo', function()
{
    //

     return View::make('addvideo');
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

/*
*
* @ route to the user profile
*/

Route::get('login', array('as' => 'login', function()
{
    //
    return View::make('login');
}));






/* -------------------------------- UserController ---------------------------------  */


Route::post('Authentification' , array( 'as' => 'Authentification' , 'uses'=>'UserController@Authentification'));


Route::get('logout',array ( 'as' => 'logout' , 'uses' => 'UserController@logout'))	;

Route::post('change',array ( 'as' => 'change' , 'uses' => 'UserController@change')) ;

Route::get('showV',array ( 'as' => 'showV' , 'uses' => 'UserController@showV')) ;

Route::post('addcom/{id_v}',array ( 'as' => 'addcom' , 'uses' => 'UserController@addCom'))	;

Route::get('showstream',array ( 'as' => 'showstream' , 'uses' => 'UserController@showstream')) ;

Route::post('addcomS/{id}',array ( 'as' => 'addcomS' , 'uses' => 'UserController@addcomS')) ;

Route::post('addstream',array ( 'as' => 'addstream' , 'uses' => 'UserController@addstream')) ;



//Route::get('login' , array( 'as' => 'login' , 'uses'=>'UserController@login'));


Route::post('prepare','UserController@test');

Route::post('registration','UserController@register');


/* -------------------------------- ProfController ---------------------------------  */

Route::post('AddCours',array ( 'as' => 'AddCours' , 'uses' => 'ProfController@AddCours'))  ;
Route::post('AddVideo',array ( 'as' => 'AddVideo' , 'uses' => 'ProfController@AddVideo'))  ;

Route::get('addv/{id_c}',array ( 'as' => 'addtoo' , 'uses' => 'ProfController@addTo'))  ;
Route::post('commit',array ( 'as' => 'commit' , 'uses' => 'ProfController@commit'))  ;






/* -------------------------------- AdminController ---------------------------------  */


Route::get('makeAdmin/{id}',array ( 'as' => 'makeAdmin' , 'uses' => 'AdminController@makeAdmin'))  ;

Route::get('makeProf/{id}',array ( 'as' => 'makeProf' , 'uses' => 'AdminController@makeProf'));

Route::get('supcour/{id}',array ( 'as' => 'supcour' , 'uses' => 'AdminController@supcour'));

Route::get('supvideo/{id}',array ( 'as' => 'supvideo' , 'uses' => 'AdminController@supvideo'));

Route::get('supcom/{id}',array ( 'as' => 'supcom' , 'uses' => 'AdminController@supcom'));

Route::get('revoc/{id}',array ( 'as' => 'revoc' , 'uses' => 'AdminController@revocprof'));

Route::get('revocadmin/{id}',array ( 'as' => 'revocadmin' , 'uses' => 'AdminController@revocadmin'));


