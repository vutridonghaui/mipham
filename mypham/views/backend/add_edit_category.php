<?php 
	//khai bao bien $layout de load template
	$this->layout = "views/backend/layout.php";
 ?>
<div class="col-md-12">	
	<div class="panel panel-primary">
		<div class="panel-heading">Edit</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $formAction; ?>">		
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Name</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->name)?$record->name:''; ?>" name="name" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" value="Thực hiện" class="btn btn-primary">
				</div>
			</div>
			<!-- end rows -->
		</form>
		</div>
	</div>
</div>