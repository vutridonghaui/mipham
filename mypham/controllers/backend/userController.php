<?php 
	include "models/backend/userModel.php";
	class userController extends Controller{
		//su dung class userModel
		use userModel;
		public function __construct(){
			//xac thuc dang nhap
			$this->authentication();
		}
		public function list_user(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 4;
			//----
			//phan trang	
			//tinh tong so ban ghi
			$total = $this->model_total();			
			//tinh tong so trang
			$numPage = ceil($total/$recordPerPage);//ham ceil de lay tran
			//lay bien p truyen tu url -> bien nay the hien la dang o may
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			//----
			//goi ham model_get() trong class userModel de lay du lieu
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/list_user.php", array("data"=>$data,"numPage"=>$numPage));
		}
		public function edit(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//bien $formAction de dieu khien action cua the form
			$formAction = "index.php?area=backend&controller=user&action=do_edit&id=$id";
			$record = $this->model_edit();
			//xuat du lieu ra view qua ham renderHTML
			$this->renderHTML("views/backend/add_edit_user.php",array("formAction"=>$formAction,"record"=>$record));
		}
		public function do_edit(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//goi ham model_do_edit
			$this->model_do_edit();
			//quay tro lai trang user
			header("location:index.php?area=backend&controller=user&action=list_user");
		}
		public function add(){
			//bien $formAction de dieu khien action cua the form
			$formAction = "index.php?area=backend&controller=user&action=do_add";
			//xuat du lieu ra view qua ham renderHTML
			$this->renderHTML("views/backend/add_edit_user.php",array("formAction"=>$formAction));
		}
		public function do_add(){
			//goi ham model_do_edit
			$this->model_do_add();
			//quay tro lai trang user
			header("location:index.php?area=backend&controller=user&action=list_user");
		}
		public function delete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//goi ham model_do_edit
			$this->model_delete();
			//quay tro lai trang user
			header("location:index.php?area=backend&controller=user&action=list_user");
		}
		public function get_name(){
			$name = userModel::model_name();
			return $name->fullname;
		}
	}
 ?>
