<?php 
	trait homeModel{
		//lay danh muc
		public function modelListCategory(){
			$conn = Connection::getInstance();
			//lay cac danh muc co chua bai tin
			$query = $conn->prepare("select * from tbl_category where category_id in (select category_id from tbl_news where tbl_news.category_id=tbl_category.category_id)");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		//lay tin tuc thuoc danh muc
		public function modelListNews($category_id){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_news where category_id=:category_id order by id desc limit 1,3");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("category_id"=>$category_id));
			$result = $query->fetchAll();
			return $result;
		}
		//lay bai tin dau tien thuoc danh muc
		public function modelFirstNews($category_id){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_news where category_id=:category_id order by id desc limit 0,1");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("category_id"=>$category_id));
			$result = $query->fetch();
			return $result;
		}
	}
 ?>