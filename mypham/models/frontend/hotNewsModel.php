<?php
	trait hotNewsModel{
		public function modelListHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_news where hotnews=1 order by id desc limit 0,4");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
	}
?>