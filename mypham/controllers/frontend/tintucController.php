<?php 
	// include "models/frontend/tintucModel.php";
	class tintucController extends Controller{
		// use tintucModel;
		public function index(){
			// $tintuc = $this->model_listtintuc();
			$this->renderHTML("views/frontend/tintucView.php",array());
		}
	}
 ?>