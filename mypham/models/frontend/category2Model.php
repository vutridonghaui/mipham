<?php 
	trait category2Model{
		//lay san pham co id danh muc duoc lay tu url
		public function getPr(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$conn = Connection::getInstance();
			// lấy tối đa 10 bản ghi
			$query = $conn->prepare("select * from tbl_product where category_id=$id order by id desc limit 0,10");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}	
	}
 ?>