<?php 
//two if is used to check the url where there is send id and name or not//			
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		// echo $id;
		// die();
		if(isset($_GET['name'])){
			$name=$_GET['name'];
			// echo $name;
			// die();
			$sql="SELECT * FROM addproduct where id = '$id'";
			$query=mysqli_query($connection,$sql);
			$result=mysqli_fetch_array($query);
?>
			
		




<div class="row">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<div class="col-lg-offset-1 col-lg-7 col-md-offset-1 col-md-7  col-sm-offset-1 col-sm-7 col-xs-12">
				<table  class="panel table-responsive table-hover active">
					<br><br><br>
					<th align="right">PRODUCT ID <?php echo $result['id']; ?></th>
					<tr>

						<td align="right">
							<font face="Verdana" size="4">NAME OF PRODUCT : </font>
						</td>

						<td align="left">
							<font face="verdana" size="3"><input type="text" name="name" class="boxTypes" value=<?php echo $result['name']; ?>></font>
						</td>

					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>

						<td align="right">
							<font face="Verdana" size="4">GRNDER : </font>
						</td>

						<td align="left">
							<font face="verdana" size="3">
								<select name="gender">
									<option><?php echo $result['gender']; ?></option>
									<option>MALE</option>
									<option>FEMALE</option>
								</select>
							</font>
						</td>
					</tr>

					<tr>

						<td align="right">
							<font face="Verdana" size="4">AGE GRUPE : </font>
						</td>

						<td align="left">
							<font face="verdana" size="3">

								<select name="age">
									<option> <?php echo $result['age']; ?></option>
									<option>INFAMT</option>
									<option>KID</option>
									<option>TEENAGER</option>
									<option>YOUNG ADULT</option>
									<option>ADULT</option>
									<option>AGED</option>
									<option>SENOIR CITIZENS</option>
								</select> 

							</font>
						</td>
					</tr>
					<tr>

						<td align="right">
							<font face="Verdana" size="4">PRICE : </font>
						</td>

						<td align="left">
							<font face="verdana" size="3"><input type="int" name="price" class="boxTypes" placeholder="IN Rs " value="<?php echo $result['price']; ?>"></font>
						</td>
					</tr>

				</table>
			</div>


			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div id="dvPreview" >
					
						<img src="upload/<?php echo $result['image']; ?>" height="150px" width="200px" class="img-responsive">

					
					
        		</div>
				
			</div>

			<div class="col-lg-offset-1 col-lg-10 col-lg-offset-1 col-md-offset-1 col-md-10 col-md-offset-1 col-sm-offset-1 col-sm-10 col-mg-offset-1">
				<h3>ABOUT</h3>
				<textarea name="about" class="boxTypes form-control">
					<?php echo $result['about']; ?>
				</textarea>
			</div>

		</div>
		<div class="col-lg-offset-5 col-lg-2 col-lg-offset-5 col-md-offset-5 col-md-2 col-md-offset-5 col-sm-offset-5 col-sm-2 col-mg-offset-5 " style=" color:black; font-size:18px;">
			<button name="update" value="update">UPDATE</button>
		</div>
			
	</form>
</div>
<?php 
					if (isset($_POST['update']))
					 {
					 	$id=$result['id'];
						$name=$_POST['name'];
						$gender=$_POST['gender'];
						$about=$_POST['about'];
						$age=$_POST['age'];
						$price=$_POST['price'];

					$sql="UPDATE addproduct SET name='$name',about='$about',price='$price',age='$age',gender='$gender' where id='$id'";
								mysqli_query($connection,$sql);
									header("location:window.location.href='?p=view");
							
					}


}}
	else{
		echo "ERROR";
		}
	
?>