<?php 
	include "models/frontend/saleProductModel.php";
	class saleProductController extends Controller{
		use saleProductModel;
		public function index($sl){
			$data = $this->getSale($sl);
			//sử dungj chung 1 form View product
			$this->renderHTML("views/frontend/formProductView5.php",array("data"=>$data));
		}	
		public function hotProduct($sl){
			$data = $this->getSale($sl);
			//sử dungj chung 1 form View product
			$this->renderHTML("views/frontend/formProductView5.php",array("data"=>$data));
		}
	}
 ?>


 		