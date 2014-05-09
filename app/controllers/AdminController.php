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


}
