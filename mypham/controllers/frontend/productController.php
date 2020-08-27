<?php 
	//include file productModel de su dung class productModel
	include "models/frontend/productModel.php";
	class productController extends Controller{
		//su dung class productModel
		use productModel;		
		public function category(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			
			//quy định số bản ghi trên một trang
			$recordPerPage = 15;
			//----
			//phân trang
			//tính thông số bản ghi
			$total = $this->model_total();			
			//tính tổng số trang
			$numPage = ceil($total/$recordPerPage);//ham ceil de lay tran
			//lấy biến p truyển từ url -> biến này thể hiện là đang ở trang mấy
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			//----
			//goi ham model_get() trong class productModel de lay du lieu
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/frontend/productCategoryView.php", array("data"=>$data,"numPage"=>$numPage,"id"=>$id));
		}		
		//chi tiết sản phẩm
		public function detail(){
			$record = $this->model_detail();
			$this->renderHTML("views/frontend/productDetailView.php",array("record"=>$record));
		}

		//test 1 cho nhieu
		public function getProductInHome($category_id){
			$data = $this->getProductInHomeModel($category_id);
			//sử dungj chung 1 form View product
			$this->renderHTML("views/frontend/formProductView.php",array("data"=>$data));
		}

		//san pham danh muc ngang Form2
		public function sanphamdanhmucLuoi($category_id){
			$data = $this->getProductInHomeModel($category_id);
			//sử dungj chung 1 form View product
			$this->renderHTML("views/frontend/formProductView2.php",array("data"=>$data));
		}

		//san pham danh muc ngang Form3
		public function sanphamdanhmucDoc($category_id){
			$data = $this->getProductInHomeModel($category_id);
			//sử dungj chung 1 form View product
			$this->renderHTML("views/frontend/formProductView3.php",array("data"=>$data));
		}		
	}
 ?>
