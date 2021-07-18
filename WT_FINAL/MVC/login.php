
<div class="center-login">
	<h1 class="text text-center">Login</h1>

	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="uname" value="<?php echo $uname;?>" class="form-control">
			
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="pass"  class="form-control">
		
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="btn_login" class="btn btn-danger" value="Login" class="form-control">
		</div>
	
	</form>
</div>


<?php include 'footer.php';?>