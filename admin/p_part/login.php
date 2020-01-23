<div class="row modal-dialog">
<form action="" method="POST">
	<table class="table table-condensed  ">
		<th>Login Form</th>
		<tr>
			<td>USER NAME</td>
		</tr>
		<tr>
			<td><input type="text" name="user"></td>
			
		</tr>	
		<tr>
			<td>PASSWORD</td>
		</tr>
		<tr>
			<td><input type="password" name="password"></td>
			
		</tr>
		
		<tr>
			<td><input type="submit" name="login" value="login"></td>
		</tr>	
	</table>
</form>
	
</div>
<?php 
	
	if(isset($_POST['login']))
	{	
		
		$user=$_POST['user'];
		$password=$_POST['password'];
		$sql="SELECT * FROM userlogin where username='$user' and password='$password'";
		$query=mysqli_query($connection,$sql);
			if (mysqli_num_rows($query)) {
				$_SESSION['user']=$user;
				header('Location:home.php');
			
		}
		else
		{
			echo"SORRY YOUR USERNAME OR PASSWORD IS WRONG....";
		}
	}
 ?>
