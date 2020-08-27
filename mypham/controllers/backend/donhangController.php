<?php 
	//include file donhangModel de su dung class donhangModel
	include "models/backend/donhangModel.php";
	class donhangController extends Controller{
		//su dung class donhangModel
		use donhangModel;
		public function __construct(){
			//xac thuc dang nhap
			$this->authentication();
		}
		public function list_donhang(){
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
			//goi ham model_get() trong class donhangModel de lay du lieu
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/donhang.php", array("data"=>$data,"numPage"=>$numPage));
		}


		public function edit(){
			// $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// //bien $formAction de dieu khien action cua the form
			// $formAction = "index.php?area=backend&controller=product&action=do_edit&id=$id";
			$record = $this->model_edit();
			//xuat du lieu ra view qua ham renderHTML
			$this->renderHTML("views/backend/edit_donhang.php",array("record"=>$record));
		}


		public function do_edit(){
			// $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//goi ham model_do_edit
			$this->model_do_edit();
			//quay tro lai trang donhang
			header("location:index.php?area=backend&controller=donhang&action=list_donhang");
		}

		public function delete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//goi ham model_do_edit
			$this->model_delete();
			//quay tro lai trang donhang
			header("location:index.php?area=backend&controller=donhang&action=list_donhang");
		}




	}
 ?>