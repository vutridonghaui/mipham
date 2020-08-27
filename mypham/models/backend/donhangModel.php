<?php 
	trait donhangModel{
		//lay tat ca cac ban ghi
		public function model_get($fromRecord,$recordPerPage){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_lienhe order by id_donhang desc limit $fromRecord,$recordPerPage");
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
			$query = $conn->prepare("select * from tbl_lienhe order by id_donhang desc");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute();
			//dem so luong ban ghi
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}
		//edit -> sua ban ghi
		//lay tat ca san pham co id duoc truyen tu url
		public function model_edit(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_lienhe where id_donhang=:id");
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

			$hoten = $_POST["hoten"];
			$spmua = $_POST["spmua"];
			$soluong = $_POST["soluong"];
			$diachi = $_POST["diachi"];
			$dienthoai = $_POST["dienthoai"];

			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("update tbl_lienhe set hoten=:hoten, spmua=:spmua, soluong=:soluong, diachi=:diachi, dienthoai=:dienthoai where id_donhang=:id");
			//thuc thi truy van
			$query->execute(array("hoten"=>$hoten,"spmua"=>$spmua, "soluong"=>$soluong, "diachi"=>$diachi, "dienthoai"=>$dienthoai, "id"=>$id));			
		}

		public function model_delete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;	
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("delete from tbl_lienhe where id_donhang=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}
	}
 ?>