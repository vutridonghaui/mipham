<?php
	trait userModel{
		//lay tat ca cac ban ghi
		public function model_get($fromRecord,$recordPerPage){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_user order by id desc limit $fromRecord,$recordPerPage");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute();
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_user order by id desc");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute();
			//dem so luong ban ghi
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}
		//edit -> sua ban ghi
		public function model_edit(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_user where id=:id");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("id"=>$id));
			//lay mot ban ghi
			$record = $query->fetch();
			return $record;
		}
		public function model_do_edit(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("update tbl_user set fullname=:name where id=:id");
			//thuc thi truy van
			$query->execute(array("name"=>$fullname,"id"=>$id));
			//neu password khong rong thi ma hoa va update password
			if($password != ""){
				$password = md5($password);
				//chuan bi cau truy van
				$query = $conn->prepare("update tbl_user set password=:pass where id=:id");
				//thuc thi truy van
				$query->execute(array("pass"=>$password,"id"=>$id));
			}
		}
		public function model_do_add(){
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$password = md5($password);
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("insert into tbl_user set fullname=:name, email=:mail, password=:pass");
			//thuc thi truy van
			$query->execute(array("name"=>$fullname,"mail"=>$email,"pass"=>$password));
		}
		public function model_delete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;	
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("delete from tbl_user where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
		//Lấy fullname, email tương ứng
		public static function  model_name(){
			$mail = $_SESSION["email"];
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select fullname from tbl_user where email=:email");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("email"=>$mail));
			//lay mot ban ghi
			$fullname = $query->fetch();
			return $fullname;
		}
	}
	
 ?>
