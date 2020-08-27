<?php
	include "models/frontend/menuCategoryModel.php";
	class menuCategoryController extends Controller{
		use menuCategoryModel;
		public function listCategory(){
			//goi ham modelListCategory de lay du lieu
			$category = $this->modelListCategory();
			//goi view
			$this->renderHTML("views/frontend/menuCategoryView.php",array("category"=>$category));
		}
	}
?>