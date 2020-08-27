<?php 
	//dinh nghia duong dan file layout
	$this->layout = "views/backend/layout.php";
 ?>
 <!-- gán fullname vào biến sesion -->
<?php 
 	include "controllers/backend/userController.php";
 	$obj = new userController();
 	$obj->get_name();
 		$_SESSION["name"] = userController::get_name();
?>

<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary text-center">
		<div class="panel-heading"></div>
		<div class="panel-body">
			<h1>Hi. &nbsp; <?php echo $_SESSION["name"]; ?></h1>
		</div>
	</div>
</div>