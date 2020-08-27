<?php 
	trait filterModel{
		//lay san pham voi theo key = nhập từ bàn phím
		public function model_get(){
			$min = isset($_GET["min"]) ? $_GET["min"] : "";
			$max = isset($_GET["max"]) ? $_GET["max"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product where price between $min and $max order by id desc");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van

			$query->execute(array("min"=>$min, "max"=>$max));
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetchAll();
			return $result;
		}
	}
	
 ?>