<?php 
	//include file newsModel de su dung class newsModel
	include "models/frontend/introduceModel.php";
	class introduceController extends Controller{
		use introduceModel;
		public function index(){
			$data = $this->getIntroduce();
			$this->renderHTML("views/frontend/gioiThieuView.php", array("data"=>$data));
		}		
	}
 ?>