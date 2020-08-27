
<?php 
	trait productModel{
		//lấy tất cả các bản ghi
		public function model_get($fromRecord,$recordPerPage){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy biến kết nối cơ sở dữ liệu
			$conn = Connection::getInstance();			
			//chuẩn bị truy vấn
			$query = $conn->prepare("select * from tbl_product where category_id=:id order by id desc limit $fromRecord,$recordPerPage");
			//chế độ duyệt bản ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thực hiện
			$query->execute(array("id"=>$id));
			//duyệt tất cả các bản ghi đưa về một biến
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy biến kết nối cơ sở dữ liệu
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("select * from tbl_product where category_id=:id order by id desc");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute(array("id"=>$id));
			//dem so luong ban ghi
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}
		// lấy Danh mục của sản phẩm
		public function getCategoryName(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy biến kết nối cơ sở dữ liệu
			$conn = Connection::getInstance();
			//chuẩn bị câu truy vấn
			$query = $conn->prepare("select name from tbl_category where category_id=:id");
				//chọn chế độ duyệt bản ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thực hiện truy vấn
			$query->execute(array("id"=>$id));
			//lay mot ban ghi
			$record = $query->fetch();
			return $record;
		}
		//lấy chi tiết 1 bản ghi
		public function model_detail(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where id=$id ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			//lay mot ban ghi
			$result = $query->fetch();
			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";
			return $result;
		}
		//lấy sản phẩm theo id để in ra từng mục trong Home(sử dụng 1 form View, 1 Model, 1 Controller)
		public function getProductInHomeModel($category_id){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$conn = Connection::getInstance();
			// lấy tối đa 10 bản ghi
			$query = $conn->prepare("select * from tbl_product where category_id=:category_id order by id desc limit 0,10");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("category_id"=>$category_id));
			$result = $query->fetchAll();
			return $result;
		}	
		//lay tat ca san pham lien quan
		public function sanphamlienquan(){
			$category_id = isset($_GET["category_id"]) && is_numeric($_GET["category_id"]) ? $_GET["category_id"]:0;
			$conn = Connection::getInstance();
			// lấy tối đa 10 bản ghi
			$query = $conn->prepare("select * from tbl_product where category_id=:category_id order by id desc limit 0,10");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("category_id"=>$category_id));
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>
