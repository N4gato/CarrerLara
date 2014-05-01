<?php

class ProfController extends BaseController {


	public function AddCours(){

		$id_p = Session::get('proflogedID');

		$url = Input::get('url');
		$url_i =Input::get('url_i');
		$cat =Input::get('categorie');
		$date_deb =Input::get('date_deb');
		$dat_fin = Input::get('dat_fin');
		$type = Input::get('type');
		$reglement = Input::get('reglement');

		$cours = new Cours;
		
		$cours->url = $url  ;
		$cours->img = $url_i  ;
		$cours->categorie = $cat  ;
		$cours->date_deb = $date_deb  ;
		$cours->date_fin = $dat_fin  ;
		$cours->type_cours = $type  ;
		$cours->paye = $reglement  ;

		$cours->save();

		$share = new Shared ;

		$share->id_p = $id_p;
		$share->id_c = $cours->id_c;
		$share->date_shared = $date_deb;

		$share->save();

		return Redirect::to('profile') ;
		

		
	}



}