<?php 
	$id = 1;
 ?>


 <?php 
 	if($id == 16){
 		echo "alert('hello'); return false"; 
 	}
 	else{ echo "return window.confirm('Are you sure?');";} 
 ?>

<h1>
	onclick="<?php if($id == 15){ echo "alert('hello'); return false"; } ?>";
</h1>

<h1>===============</h1>


style="<?php if($id==2 or  $id==3 or $id==4 or $id==5){echo "color: red;"}else{echo "";} ?>"


<?php if($id==2 or $id==3 or $id==4 or $id==5){echo "color: red;";}else{echo " ";} ?>

<?php 
	if($id==2 or  $id==3 or $id==4 or $id==5){
		echo "color: red;"
	}
	else{
		echo "";
	} 
?>