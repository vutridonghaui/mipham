<?php 
	trait productModel{
		//lay tat ca cac ban ghi
		public function model_get($fromRecord,$recordPerPage){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product order by id desc limit $fromRecord,$recordPerPage");
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
			$query = $conn->prepare("select * from tbl_product order by id desc");
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
			$query = $conn->prepare("select * from tbl_product where id=:id");
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

			$category_id = $_POST["category_id"];
			$name = $_POST["name"];
			$code = $_POST["code"];
			$saleproduct = isset($_POST["saleproduct"]) ? 1 : 0;
			$price = $_POST["price"];
			$description = $_POST["description"];
			$content = $_POST["content"];

			//----------
			//update ban ghi
			$conn = Connection::getInstance();
			//--------
			$result = $conn->prepare("update tbl_product set name=:name, category_id=:category_id, code=:code,price=:price,saleproduct=:saleproduct, description=:description, content=:content where id=:id");

			$result->execute(array("name"=>$name,"category_id"=>$category_id, "code"=>$code,"price"=>$price, "saleproduct"=>$saleproduct, "description"=>$description ,"content"=>$content,"id"=>$id));
			//----------
			//neu user chon anh
			//doi tuong $_FILES su dung de thao tac file
			/*
				$_FILES["img"]["name"] -> ten anh
				$_FILES["img"]["ext"] -> duoi anh
				$_FILES["img"]["tmp_name"] -> duong dan anh tam thoi
			*/
			if($_FILES["img"]["name"] != ""){
				//--------
				//lay anh cu de xoa
				$old_img = $conn->prepare("select img from tbl_product where id=:id");
				$old_img->setFetchMode(PDO::FETCH_OBJ);
				$old_img->execute(array("id"=>$id));
				$get_old_img = $old_img->fetch();
				if(isset($get_old_img->img)){
					//xoa anh cu
					unlink("assets/upload/product/".$get_old_img->img);
				}
				//--------
				$img = time()."_".$_FILES["img"]["name"];
				//--------
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "assets/upload/product/$img");
				//--------
				//update lai field img
				$result = $conn->prepare("update tbl_product set img=:img where id=:id");
				$result->execute(array("img"=>$img,"id"=>$id));
				//--------
			}
			//----------
		}
		public function model_do_add(){
			$category_id = $_POST["category_id"];
			$name = $_POST["name"];
			$code = $_POST["code"];
			$saleproduct = isset($_POST["saleproduct"]) ? 1 : 0;
			$price = $_POST["price"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$img = "";
			if($_FILES["img"]["name"] != ""){
				$img = time()."_".$_FILES["img"]["name"];
				//--------
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "assets/upload/product/$img");
			}
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$result = $conn->prepare("insert into tbl_product set name=:name, category_id=:category_id, code=:code,price=:price,saleproduct=:saleproduct,content=:content, description=:description, img=:img ");
			$result->execute(array("name"=>$name,"category_id"=>$category_id,"code"=>$code,"price"=>$price, "saleproduct"=>$saleproduct, "description"=>$description,"img"=>$img, "content"=>$content));
		}
		public function model_delete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;	
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//--------
			//lay anh cu de xoa
			$old_img = $conn->prepare("select img from tbl_product where id=:id");
			$old_img->setFetchMode(PDO::FETCH_OBJ);
			$old_img->execute(array("id"=>$id));
			$get_old_img = $old_img->fetch();
			if(isset($get_old_img->img)){
				//xoa anh cu
				unlink("assets/upload/product/".$get_old_img->img);
			}
			//--------
			//chuan bi cau truy van
			$query = $conn->prepare("delete from tbl_product where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
		}


		public function search($key){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product where name like '%$key%' order by id desc ");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("key"=>$key));
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetchAll();
			return $result;
		}
	}
	
 ?>