<?php 
	include "models/frontend/productModel.php";
	class chitietController extends Controller{
		use productModel;
		public function index(){
			$data = $this->model_detail();
			$this->renderHTML("views/frontend/chitietView.php",array("data"=>$data));
		}
	}
 ?>