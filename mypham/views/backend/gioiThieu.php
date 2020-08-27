<?php 
	//load file template
	$this->layout = "views/backend/layout.php";
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit news</div>
        <div class="panel-body">
            <!-- muon load upload file thi phai co thuoc tinh enctype -->
            <form method="post" onsubmit="return sub();" action="index.php?area=backend&controller=gioiThieu&action=edit" enctype="multipart/form-data" >

                <!-- row -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Giới thiệu</div>
                    <div class="col-md-10">
                        <textarea name="content" class="form-control" style="height:250px;">
                            <?php echo isset($data->content)?$data->content:""; ?>
                        </textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace("content");
                        </script>
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="submit" class="btn btn-primary" value="Xác nhận chỉnh sửa">
                    </div>
                </div>
            </form> 
            <!-- bo rerturn false de tiep tuc submit/ neu ko thi corfirm xong se thoat, kia kip submt -->
            <script type="text/javascript">
                function sub(){
                    confirm("Xác nhận chỉnh sửa");
                }
            </script>
        </div>
    </div>
</div>