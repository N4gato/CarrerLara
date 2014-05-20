<?php

class AdminController extends BaseController {


	public function makeAdmin($id){

		$Admin = User::find($id);

		$Admin->admin = 1;

		$Admin->save();

		return Redirect::to('Admin');
	}

	public function makeProf($id){

	$pro = User::find($id);

		$pro->type = 1;

		$pro->save();

		$add = new Prof;

		$add->name = $pro->username;
		$add->CIN = $pro->CNE;
		$add->mail_p = $pro->mail_u;

		$add->save();

		return Redirect::to('Admin');
	}


	public function supcour($id){

	$affectedRows = Shared::where('id_c', '=', $id)->delete();
	
	$cour = Cours::find($id);
	$cour->delete();

	//$share = new Shared ;

		return Redirect::to('Admin');
	}

	public function supvideo($id){

	
	$video = Cours::find($id);
	$video->delete();

	//$share = new Shared ;

		return Redirect::to('Admin');
	}

	public function supcom($id){

	
	$com = Comment::find($id);
	$com->delete();

	//$share = new Shared ;

		return Redirect::to('Admin');
	}

	public function revocprof($id){

	
	$prof = Prof::find($id);
	$prof->delete();

	$user = User::find($id);
	$user->type = 0;
	$user->save();

	//$share = new Shared ;

		return Redirect::to('Admin');
	}

	public function revocadmin($id){

	
	$user = User::find($id);
	$user->admin = 0;
	$user->save();
	//$share = new Shared ;

		return Redirect::to('Admin');
	}


}
