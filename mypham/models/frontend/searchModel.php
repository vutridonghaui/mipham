<?php 
	trait searchModel{
		//lay san pham voi theo key = nhập từ bàn phím
		public function model_get(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			// $key = "dior";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product where name like '%$key%' or description like '%$key%' order by id desc");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van

			$query->execute(array("key"=>$key));
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetchAll();
			return $result;
		}
	}
	
 ?>