<?php 
	trait categoryModel{
		public function model_listCategory(){
			//lấy biến kết nối $connection
			$conn = Connection::getInstance();
			//chuẩn bị truy vấn
			$query = $conn->prepare("select * from tbl_category order by category_id desc");		
			//thực hiện truy vấn
			$query->execute();
			//set kiểu truy vấn
			$query->setFetchMode(PDO::FETCH_OBJ);
			//lấy tất cả các bản ghi
			$result = $query->fetchAll();
			//trả về 1 biến $result
			return $result;
		}
	}
 ?>