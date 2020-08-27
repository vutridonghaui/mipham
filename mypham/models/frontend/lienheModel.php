<?php 
	trait lienheModel{
		public function add_lienhe(){
			// lay du lieu post tren url
			$hoten = $_POST["hoten"];
			$spmua = $_POST["spmua"];
			$diachi = $_POST["spmua"];
			$dienthoai = $_POST["dienthoai"];
			$soluong = $_POST["soluong"];
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$result = $conn->prepare("insert into tbl_lienhe set hoten=:hoten, spmua=:spmua, diachi=:diachi, dienthoai=:dienthoai, soluong=:soluong");
			// $result = $conn->prepare("insert into tbl_lienhe set hoten=$hoten, spmua=$spmua, diachi=$diachi");
			$result->execute(array("hoten"=>$hoten,"spmua"=>$spmua,"diachi"=>$diachi, "dienthoai"=>$dienthoai, "soluong"=>$soluong));
		}
	}
 ?>		

