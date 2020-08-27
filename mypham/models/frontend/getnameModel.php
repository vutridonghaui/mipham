<?php 
	trait getnameModel{
		public function get(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lấy biến kết nối $connection
			$conn = Connection::getInstance();
			//chuẩn bị truy vấn
			$query = $conn->prepare("select * from tbl_category where category_id=$id order by category_id desc");		
			//thực hiện truy vấn
			$query->execute();
			//set kiểu truy vấn
			$query->setFetchMode(PDO::FETCH_OBJ);
			//lấy tất cả các bản ghi
			$result = $query->fetch();
			//trả về 1 biến $result
			return $result;
		}
	}
 ?>