<?php

class ProfController extends BaseController {


	public function AddCours(){

		$id_p = Session::get('proflogedID');

		
		$url_i =Input::get('url_i');
		$cat =Input::get('categorie');
		$date_deb =Input::get('date_deb');
		$dat_fin = Input::get('dat_fin');
		$type = Input::get('type');
		$reglement = Input::get('reglement');

		$cours = new Cours;
		
		
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

	public function addTo($id_c){

		Session::put('id_cour_add', $id_c);
		

		return "hello ta bien arriver".$id_c  ;
	}

	
	public function showCours(){


	$i = 0;

	$id_p = Session::get('proflogedID');


	$shareds = Shared::where('id_p', '=', $id_p)->take(10)->get();


		foreach ($shareds as $shared){

			echo $shared->id_c.'<br />';

			$cours = Cours::where('id_c', '=', $shared->id_c)->take(10)->get();
			

			
			foreach ($cours as $cour){

		    $img[$i] = $cour->img;
		    $cat[$i] = $cour->categorie;
		    $id_c[$i] = $cour->id_c;


			
			$i++;

			}

			
		}
			try {
				
					return View::make('teach')->with('img', $img)->with('cat' , $cat)->with('i' , $i)->with('er' , 1)->with('id_c' , $id_c);	
			} catch (Exception $e) {
					
							return View::make('teach')->with('er', 1)->with('i' , 0);
			}
	}

}
			




