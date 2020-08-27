<?php 
	//include file searchModel de su dung class searchModel

	// Lấy id những sản phầm mà tìm kiếm được với từ khóa key = nhập từ bàn phím 
	include "models/frontend/searchModel.php";
	class searchController extends Controller{
		//su dung class searchModel
		use searchModel;
		public function index(){
			$data = $this->model_get();
			// $this->renderHTML("views/frontend/searchView.php", array("data"=>$data);
			$this->renderHTML("views/frontend/searchView.php", array("data"=>$data) );
			 // $this->renderHTML("views/frontend/test.php", array("data"=>$data) );
		}
	}
 ?>