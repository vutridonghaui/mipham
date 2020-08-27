<?php 
	include "models/frontend/homeModel.php";
	class homeController extends Controller{
		use homeModel;
		public function index(){
			//lay danh muc tin tuc
			$category = $this->modelListCategory();
			$this->renderHTML("views/frontend/homeView.php",array("category"=>$category));
		}
	}
 ?>