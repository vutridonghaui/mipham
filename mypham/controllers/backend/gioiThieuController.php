<?php 
	//include file newsModel de su dung class newsModel
	include "models/backend/gioiThieuModel.php";
	class gioiThieuController extends Controller{
		use gioiThieuModel;
		public function __construct(){
			//xac thuc dang nhap
			$this->authentication();
		}
		public function index(){
			$data = $this->getIntroduce();
			$this->renderHTML("views/backend/gioiThieu.php", array("data"=>$data));
		}		
		//edit ban ghi
		public function edit(){
			$this->do_edit_introduce();
			header("location:index.php?area=backend&controller=gioiThieu");
		}
	}
 ?>
