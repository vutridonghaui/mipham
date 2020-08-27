<?php 
	// include "models/frontend/danhmucModel.php";
	class danhmucController extends Controller{
		// use danhmucModel;
		public function index(){
			// $danhmuc = $this->model_listdanhmuc();
			$this->renderHTML("views/frontend/danhmucView.php",array());
		}
	}
 ?>