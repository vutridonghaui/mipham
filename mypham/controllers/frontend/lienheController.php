<?php 
	include "models/frontend/lienheModel.php";
	class lienheController extends Controller{
		use lienheModel;
		public function index(){
			$this->renderHTML("views/frontend/lienhe2View.php");
		}


		public function send(){
			$this->add_lienhe();
			$this->renderHTML("views/frontend/lienhe2View.php");
		}
	}
 ?>