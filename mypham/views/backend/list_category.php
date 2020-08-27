 <?php 
	//dinh nghia file layout de load layout
	$this->layout = "views/backend/layout.php";
 ?>
 
<div class="col-md-12">
	<div style="margin-bottom:5px;">
		<a href="index.php?area=backend&controller=category&action=add" class="btn btn-primary">Thêm danh mục</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">Danh mục</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>name</th>
					<th style="width:100px;"></th>
				</tr>

				<!-- Mặc định 1 số category không được thao tác -->
				<?php foreach($data as $rows): ?>
				<?php $id = $rows->category_id; ?>
				<tr>
					<td style="<?php if($id==2 or $id==3 or $id==4){echo "color: red;";}else{echo "";} ?> " ><?php echo $rows->name; ?></td>
					<td style="text-align:center;">
						<a href="index.php?area=backend&controller=category&action=edit&id=<?php echo $rows->category_id; ?>"  onclick="<?php if($id == 2 or  $id == 3 or $id==4 ){ echo "alert('Xin vui lòng không thay đổi danh mục này!'); return false"; }else{ echo "";}  ?>"; style="<?php if($id==2 or $id==3 or $id==4){echo "color: red;";}else{echo "";} ?> " >Sửa</a>&nbsp;
						<a href="index.php?area=backend&controller=category&action=delete&id=<?php echo $rows->category_id;?>"  onclick="<?php if($id == 2 or  $id == 3 or $id==4){ echo "alert('Xin vui lòng không Xóa mục này!'); return false"; }else{ echo "return window.confirm('Are you sure?');";} ?>"; style="<?php if($id==2 or $id==3 or $id==4){echo "color: red;";}else{echo "";} ?> " >Xóa</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li class="disabled"><a href="#">Trang</a></li>
				<?php for($i = 1; $i <= $numPage; $i++): ?>
				<li><a href="index.php?area=backend&controller=category&action=list_category&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>