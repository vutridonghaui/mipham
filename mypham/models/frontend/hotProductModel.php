<?php
	trait hotProductModel{
		//lấy tất cả cách bản ghi có hoproduct
		public function hotProduct($fromRecord,$recordPerPage){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where hotproduct=1 order by id desc limit $fromRecord,$recordPerPage");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		//lấy tổng số bản ghi
		public function model_total(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_category order by category_id desc");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute();
			//dem so luong ban ghi
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}

	}
?>