<?php 
	include "models/frontend/category2Model.php";
	class category2Controller extends Controller{
		use category2Model;
		public function index(){
			// $data = $this->getPr();
			// $this->renderHTML("views/frontend/danhmucView.php",array());
			$this->renderHTML("views/frontend/danhmucView.php");
		}
	}
 ?>