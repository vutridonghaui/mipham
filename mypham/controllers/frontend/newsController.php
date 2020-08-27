<?php 
	include "models/frontend/newsModel.php";
	class newsController extends Controller{
		use newsModel;
		public function detail(){
			$record = $this->modelNewsDetail();
			$this->renderHTML("views/frontend/newsDetailView.php", array("record"=>$record));
		}
	}
 ?>