<?php 
	trait saleProductModel{
		public function getSale($sl){
			$conn = Connection::getInstance();
			// lấy tối đa 10 bản ghi
			$query = $conn->prepare("select * from tbl_product where saleproduct=1 order by id desc limit 0,$sl");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>