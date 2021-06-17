  <?php 
            $name="";
            $err_name="";
            $username="";
            $err_username="";
            $password="";
            $err_password="";
            $containpass="";
            $err_containpass="";
            $email="";
            $err_email="";
            $phone="";
            $err_phone="";
            $address="";
            $err_address="";
            $birth="";
            $err_birth="";
            $gender="";
            $err_gender="";
            $where="";
            $err_where="";
            $bio="";
            $err_bio="";
			$hasError=false;

            if($_SERVER['REQUEST_METHOD']== "POST"){
                if(empty($_POST["name"])){
					$hasError = true;
                    $err_name="Name is required";
                }
                else{
					$name=$_POST["name"];
				}
				if(empty($_POST["username"])){
					$hasError = true;
					$err_username="Username is Required";
				}
				else if(strlen($_POST["username"])<6){
					$hasError = true;
					$err_username="*Username should be at least 6 characters";
				}
                elseif (strpos($_POST["username"]," ")){
					$hasError = true;
                    $err_username="Username should not contain any space";
                }
				else{
					
					$username=$_POST["username"];
				}
				if(empty($_POST["password"]))
		 		{
					$hasError = true;
			 	$err_password="Password is Required";
		 		}
		 		elseif(htmlspecialchars($_POST["password"]))
		 		{   $hasError = true;
					$err_password="HTML Special characters used";
				}
		 		elseif (strlen($_POST["password"])<8) {
					$hasError = true;
		 		$err_password="Password must contain 8 characters";
		 		}
		 		elseif(!strpos($_POST["password"],"#&&?"))
		 		{
					
			    $err_password="Password should contain a special character";
			    }
		 		elseif(!is_numeric($_POST["password"]))
		 		{	
				
			 	$err_password="Password should contain at least one Numeric values";
		 		}
		 		elseif(!ctype_upper($_POST["password"]))
		 		{
					
			 	$err_password="Password should contain one UpperCase values";
		 		}
		 		elseif(!ctype_lower($_POST["password"]))
		 		{
					
			 	$err_password="Password should contain one LowerCase values";
		 		}
		 		else
		 		{
			 	$password=$_POST["password"];
				}		
				if(empty($_POST["containpass"]))
		 		{
					$hasError = true;
			 	$err_containpass="Password is Required";
		 		}
		 		else
		 		{
			 	$containpass=$_POST["containpass"];
				}		
                if(empty($_POST["email"])){
					$hasError = true;
					$err_email="Mail address required";
				}
				elseif(!strpos($_POST["email"],"@ &&."))
		 		{
					$hasError = true;
			    $err_email="Conditions must contain @ and at least one .(dot) after @ ";
			    }
				else{
					$email=$_POST["email"];
				}
				if(empty($_POST["number"])){
					$hasError = true;
                    $err_number= "Number needed";
                }
				elseif(!is_numeric($_POST["number"]))
		 		{	
				$hasError = true;
			 	$err_number="Numeric values needed";
		 		}
				else{
					$number=$_POST["number"];
				}
				
				if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
			if(empty($_POST["bio"])){
			    $hasError = true;
			    $err_bio = "Bio Required";
		       }
		     else{
			       $bio = $_POST["bio"];
		          }
            }
		?> 
       <html>
			<head></head>
			<body>
			<form action="" method="POST">
			<fieldset>
			<legend><b>Club Member Registration</b></legend
				<table>
            	<tr>
					<td><span>Name</span></td>
                	<td>:<input type="text" name="name" value="<?php echo $name;?>">
                	<span><?php echo $err_name;?></span></td><br>
				<tr>
					<td><span>Username</span></td>
					<td>:<input type="text" name="username" value="<?php echo $username;?>">
					<span><?php echo $err_username;?></span></td><br>
				</tr>
				<tr>
				    <td><span>Password</span></td>
					<td>:<input type="Password" name="password" value="<?php echo $password;?>">
					<span><?php echo $err_password;?></span></td><br>
				</tr>
                <tr>
				    <td><span>Confirm Password</span></td>
					<td>:<input type="Password" name="containpass" value="<?php echo $containpass;?>">
					<span><?php echo $err_containpass;?></span></td><br>
				</tr>
               
				<tr>
					<td>Email</td>
					<td>: <input type = "text" name="email" ><?php echo $email; ?>
					<td><span> <?php echo $err_email;?> </span></td><br>
					</td>
				</tr>
                <tr>
				    <td><span>Phone</span></td>
					<td>:<input type="text" name="phone" size="3" value="<?php echo $phone;?>"placeholder="code"> -
                    <input type="text" name="phone" size="8" value="<?php echo $phone;?>"placeholder="Number">
					<span><?php echo $err_phone;?></span></td><br>
				</tr>
                <tr>
				    <td><span>Address</span></td>
					<td>:<input type="text" name="address" value="<?php echo $address;?>"placeholder="Street Address"><br>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="city" placeholder="City" size="6">-<input type="text" name="state" size="6" placeholder="State"><br>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <input type="text" name="Post" placeholder="Postal/Zip Code"><br>
                </tr>
                <tr>
				<td><span>Birth Date</span></td>
				<td>:</td>
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($y=1990;$y<=2000;$y++)
						{
							echo "<option>$y</option>";
						}
					?>
				</select>
				</td>
				</tr>

				<tr>
					<td><span><br>Gender</span></td>
					<td>:<input type="radio" value="<?php echo $gender;?>" name="gender">Male<input type="radio" value="<?php echo $gender;?>" name="gender">Female
					<span><?php echo $err_gender;?></span></td><br>
				</tr>
				<tr>
					<td><span>Where did you hear about us ?</span></td>
					    <td><br><input type="checkbox" name="Where[]" value="A Friend or Colleague"><span>A Friend or Colleague</span><br>
					    <input type="checkbox" name="Where[]" value="Google"><span>Google</span><br>
						<input type="checkbox" name="Where[]" value="Blog Post"><span>Blog Post</span><br>
                        <input type="checkbox" name="Where[]" value="News Article"><span>News Article</span>
						<span><?php echo $err_where;?></span></td><br>
				</tr>
				<tr>
					<td>Bio</td>
					<td>: <textarea name="bio" ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				</tr>
				</table>
				<br>
				<tr>
					<td><input type="Submit" name="Register" value="Register"></td>
				</tr>
				
			</table>
			 
		</form>
	</body>
</html>