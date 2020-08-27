<?php 
	//set giao dien cua file layout
	$this->layout = "views/backend/layout.php";
 ?>
 <div class="col-md-12">
<!--     <div style="margin-bottom:5px;">
        <a href="index.php?area=backend&controller=donhang&action=add" class="btn btn-primary">Add donhang</a>
    </div> -->
    <div class="panel panel-primary">
        <div class="panel-heading">List donhang</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:200px;">Họ tên người mua</th>
                    <th style="width: 140px;">điện thoại</th>
                    <th style="width: 180px">tên sản phẩm</th>
                    <th style="width: 70px;">số lượng</th>
                    <th style="width: 260px;">địa chỉ</th>                 
                </tr>

                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->hoten; ?></td>
                    <td><?php echo $rows->dienthoai; ?></td>
                    <td><?php echo $rows->spmua; ?></td>
                    <td><?php echo $rows->soluong; ?></td>
                    <td><?php echo $rows->diachi; ?></td>
                    
                    <td style="text-align:center;">
                        <a href="index.php?area=backend&controller=donhang&action=edit&id=<?php echo $rows->id_donhang; ?>">Edit</a>&nbsp;&nbsp;&nbsp;
                        <a href="index.php?area=backend&controller=donhang&action=delete&id=<?php echo $rows->id_donhang; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
				<li><a href="index.php?area=backend&controller=donhang&action=list_donhang&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>
        </div>
    </div>
</div>