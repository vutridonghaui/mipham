<?php 
	include "models/frontend/filterModel.php";
	class filterController extends Controller{
		//su dung class searchModel
		use filterModel;
		public function index(){
			$data = $this->model_get();
			// $this->renderHTML("views/frontend/searchView.php", array("data"=>$data);
			$this->renderHTML("views/frontend/filterView.php", array("data"=>$data) );
			 // $this->renderHTML("views/frontend/test.php", array("data"=>$data) );
		}
	}
 ?>