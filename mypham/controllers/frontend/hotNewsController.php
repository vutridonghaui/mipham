<?php
	include "models/frontend/hotNewsModel.php";
	class hotNewsController extends Controller{
		use hotNewsModel;
		public function hotNews(){
			$hotNews = $this->modelListHotNews();
			$this->renderHTML("views/frontend/hotNewsView.php", array("hotNews"=>$hotNews));
		}
	}
?>