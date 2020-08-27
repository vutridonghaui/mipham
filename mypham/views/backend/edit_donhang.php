<?php 
	//load file template
	$this->layout = "views/backend/layout.php";
 ?>


<!--  -->
<script type="text/javascript" src="assets/backend/ckeditor/ckeditor.js"></script>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit product</div>
		<div class="panel-body">
			<!-- muon load upload file thi phai co thuoc tinh enctype -->
			<form method="post" action="index.php?area=backend&controller=donhang&action=do_edit&id=<?php echo isset($record->id_donhang)?$record->id_donhang:""; ?>" enctype= "multipart/form-data">			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Họ tên khách hàng</div>
				<div class="col-md-10">
					<input type="text" name="hoten" class="form-control" value="<?php echo isset($record->hoten)?$record->hoten:""; ?>">
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Điện thoại</div>
				<div class="col-md-10">
					<input type="number" name="dienthoai" class="form-control" value="<?php echo isset($record->dienthoai)?$record->dienthoai:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Tên sản phẩm</div>
				<div class="col-md-10">
					<input type="text" min="0" name="spmua" class="form-control" value="<?php echo isset($record->spmua)?$record->spmua:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Số lượng</div>
				<div class="col-md-10">
					<input type="number" min="0" name="soluong" class="form-control" value="<?php echo isset($record->soluong)?$record->soluong:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Địa chỉ</div>
				<div class="col-md-10">
					<input type="text" min="0" name="diachi" class="form-control" value="<?php echo isset($record->diachi)?$record->diachi:""; ?>">
				</div>
			</div>
			<!-- end row -->

			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" class="btn btn-primary" value="Process">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>