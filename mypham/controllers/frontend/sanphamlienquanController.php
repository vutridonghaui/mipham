<?php 
	// include "models/frontend/productModel.php";
	class sanphamlienquanController extends Controller{
		use productModel;
		public function index(){
			$data = $this->sanphamlienquan();
			$this->renderHTML("views/frontend/sanphamlienquanView.php", array("data"=>$data));
		}
	}
 ?>