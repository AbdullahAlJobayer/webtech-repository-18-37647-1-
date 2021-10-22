<?php
	
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	
	
	
	$hasError=false;
	
if	($_SERVER["REQUEST_METHOD"]=="POST")
{
	if (strlen($_POST["username"])<6)

			{   $hasError=true;
				$err_username="Username length must contain 6 characters!";
			}
			elseif(strpos($_POST["username"]," "))
			{    $hasError=true;
				$err_username="Space is not allowed!";
			}
			else
			{
				$username=$_POST["username"];
			}

         
if(empty($_POST["password"]))
{
			$hasError = true;
			$err_password = "Password Required";
		
}
			elseif (strlen($_POST["password"])<8)
			{
				$hasError=true;
				$err_password="Password should contain at least 8 characters";
			}

			elseif ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))
				{
				$hasError=true;
				$err_password="Password must contain at least 8 characters and 2 special character!";
				}

				elseif(strpos($_POST["password"]," "))
			{    $hasError=true;
				$err_password="Space is not allowed!";
			}

			else
			{
				$password=$_POST["password"];
			}
	echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
	echo "Password: ".htmlspecialchars($_POST["password"])."<br>";


}

?>

	<html>
	<head></head>
	<body>
		
		<form action="" method="post">
		<fieldset>
		<legend align="left"><h1 ><b>Log in </b></h1></legend>
			<table>
				
				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
				</tr>
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>
								
				
				</table>
				<hr>
				
				<table>
				
				<tr>
				<td >
				<input type="checkbox" id="remember" name="remember" value="Me">
				<label for="remember"> Remember Me</label><br>
				</td>
				</tr>
				
				<tr>
				<td >
				<input type="Submit" name="submit" value="submit"> <button><a target="_blank" href="forgot_password.php" >Forgot Password? </a>
				</td>
				</tr>
				</table>
	</fieldset>
		</form>
		
		
	</body>
</html>
				