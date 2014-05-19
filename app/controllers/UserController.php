	<?php

class UserController extends BaseController {


	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function show(){

		$name = Session::get('username');

		
			$logged = true;
			

    	return View::make('index' ,array('logged' => $logged));
   		
	}

	public function index(){
		$id = Hash::make('secret');
		$logged = false;
		return View::make('index',array('logged' => $logged	, 'id' => $id));

	}


	public function Authentification(){

		$username = Input::get('username');
		$hash = Input::get('pwd');
		//$hash = Hash::make($pwd);

		if (Auth::attempt(array('username' => $username, 'password' => $hash))){
		    
			if(Auth::user()->type){
			$mail_u = Auth::user()->mail_u;

	
			$prof = new Prof;

			$inf = Prof::where('mail_p',$mail_u)->get()->first();
			$id_loged= $inf->id_p;

			Session::put('proflogedID',$id_loged);
			}
		


		return Redirect::to('profile');
		 
		}else{

		//echo $username."  ".$pwd;
		    return "You are not a user" ;

		//return Response::view('singed');
		//return Redirect::to('profile');
		}
	}

	public function logout(){

		Auth::logout();
		return Redirect::to('/');
	}


	public function register(){


		$reg_username = Input::get('reg_username');		
		$reg_name = Input::get('reg_name');
		$reg_mail = Input::get('reg_mail');
		$reg_CNE = Input::get('reg_CNE');
		$reg_pwd = Input::get('reg_pwd');

		$password = Hash::make($reg_pwd); 

		$user = new User;

		$user->username = $reg_username;
		$user->name_u = $reg_name;
		$user->mail_u = $reg_mail;
		$user->CNE = $reg_CNE;
		$user->password = $password;
		

		$user->save();
		

		return Redirect::to('/');
	}

	public function change(){

		$name = Input::get('username');
		$mail = Input::get('mail');
		$pwd = Input::get('newpwd');

		$password = Hash::make($pwd);

		$id = Auth::user()->id_u;

		$user = User::find($id);
		$user->password = $password;
		$user->save();
		
		return Redirect::to('profile');
	}


	
	public function showV(){
	$i=0;
		$videos = new Video ;
		$com = new Comment ;


		$video = $videos::all();

	foreach ($video as $vid){

		    $url[$i] = $vid->url;
		    $id_v[$i] = $vid->id_v;

		   // DB::insert('insert into users (id, name) values (?, ?)', array(1, 'Dayle'));
		   //	$comms[$i] = DB::select('select * from comment where id_v = ? order by id_com DESC'  , array($vid->id_v));
		   	$comms[$i] = Comment::where('id_v', '=', $vid->id_v)->orderBy('id_com', 'desc')->take(7)->get();


		    $created_at[$i] = $vid->created_at;
		    $updated_at[$i] = $vid->updated_at;


			
			$i++;

			}

		    
			
	return View::make('video')->with('comms', $comms)->with('id_v', $id_v)->with('url', $url)->with('created', $created_at)->with('updated', $updated_at)->with('i', $i);
	//var_dump($comms->comm);
	}
			
				
	public function addCom($id_v){
		$comm = Input::get('com');	
		

		$com = new Comment ;
		$com->poster = Auth::user()->username;
		$com->id_v = $id_v;
		$com->comm = $comm;
		$com->save();


		return Redirect::to('showV');

	}
	

}
