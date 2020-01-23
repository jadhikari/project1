<?php
	$page=$_GET["page"];
	 //echo $page;
	if ($page=="" || $page=="1") 
	{
		$page=0;
	}
	else
	{
		$page=($page*5)-5;
		
	}
?>
<?php 
	$sql="SELECT * FROM addproduct limit $page,5 ";
	$query=mysqli_query($connection,$sql);
 ?>
<div class="row">
	<div class="col-lg-12">
		<table class="table table-responsive">
			<tr>
				<td>id</td>
				<td>name</td>
				<td>gender</td>
				<td>age group</td>
				<td>price</td>
				<td>image</td>
				<td>about</td>
				<td>action</td>
			</tr>
			<?php 
				while ($result=mysqli_fetch_array($query))
				{
				 ?>
					<tr>
						<td><?php echo $result['id']; ?></td>
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['gender']; ?></td>
						<td><?php echo $result['age']; ?></td>
						<td><?php echo $result['price']; ?></td>
						<td><img id="a_img" src="upload/<?php echo $result['image']; ?>"></td>
						<td><?php echo substr( $result['about'],0,20); ?>....</td>
						<td><a href="?p=edit& id=<?php echo $result['id']; ?>& name=<?php echo $result['image']; ?>">EDIT</a> | <a href="?p=view& id=<?php echo $result['id']; ?>& name=<?php echo $result['image']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
					</tr>
					<?php
					//this is query for delete photo
						if(isset($_GET['id'])) {

							$id=$_GET['id'];
							$name=$_GET['name'];
							//echo $name;
						 	$sq="DELETE FROM addproduct WHERE id ='$id' ";
						 	$query = mysqli_query($connection,$sq);

						 	if($query) {						 	
						 		unlink('upload/' . $name);
						 		//echo "<meta http-equiv='refresh' content='0; URL='?p=view'' />";
						 	}
						}
						 
					?>
					<?php } ?>
		</table>


		<?php
		//it is for pagination//		
				$sql="SELECT * FROM addproduct ";
				$quer=mysqli_query($connection,$sql);	
				$count=mysqli_num_rows($quer);
				$a=$count/5;
				$a= ceil($a);
								//echo $a;
								//die();
				?>
					<div class="row">
								<p id="paging">
								<?php
									for ($b=1; $b<=$a; $b++) 
									{ 
										?> <a href="?p=view&page=<?php echo $b ?> "> <?php echo $b,""; ?> </a> <?php
									}
						 		?>
						 		</p>
					</div>
	</div>
</div>