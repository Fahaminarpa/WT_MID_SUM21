<?php include 'header.php';
	include 'controllers/add_controller.php';
	$id = $_GET["id"];
	$s = getStudents($id);
	
?>

<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $s["id"];?>">
			<input type="text" name="name" value="<?php echo $s["name"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_student" class="btn btn-success" value="Edit " class="form-control">
		</div>
	</form>
</div>

<?php include 'footer.php';?>