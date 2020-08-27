
<?php 
	trait GioiThieuModel{
		//lấy content introduce
		public function getIntroduce(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_gioithieu");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute();
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetch();
			return $result;
		}
	//chỉnh sửa giới thiệu:
		public function do_edit_introduce(){
			$content = $_POST["content"];
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("update tbl_gioithieu set content=:content");
			//thuc thi truy van
			$query->execute(array("content"=>$content));			
		}
	}
 ?>