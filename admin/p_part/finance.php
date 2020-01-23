<?php
	$page=$_GET["page"];
	 //echo $page;
	if ($page=="" || $page=="1") 
	{
		$page=0;
	}
	else
	{
		$page=($page*20)-20;
		
	}
?>
<?php 
	$sql="SELECT * FROM finance limit $page,20 ";
	$query=mysqli_query($connection,$sql);
 ?>

<table class="table">
	<head><B>FINANCLE ACTIVITIES OF ONLINE STORE</B></head>
	<tr>
		<td><b>SN</b></td>
		<td><b>PRODUCT ID</b></td>
		<td><b>AME OF PRODUCT</b>N</td>
		<td><b>DATE OF SOLD</b></td>
		<td><b>COST OF PRODUCT</b></td>
		<td><b>DISCOUNT AMOUNT</b></td>
		<td><b>TOTAL AMOUNT OF SOLD</b></td>
	</tr>
				<?php 
				while ($result=mysqli_fetch_array($query))
				{
				 ?>

	<tr>
		<td><?php echo $result['sn']; ?></td>
		<td><?php echo $result['product_id']; ?></td>
		<td><?php echo $result['product_name']; ?></td>
		<td><?php echo $result['date']; ?></td>
		<td><?php echo $result['product_cost']; ?></td>
		<td><?php echo $result['discount']; ?></td>
		<td>
			<?php
				$a=$result['product_cost'];
				$b=$result['discount'];
				 $total= $a- $b;
				 echo $total; 
			?>
		</td>

	</tr>
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
										?> <a href="?p=finance&page=<?php echo $b ?> "> <?php echo $b,""; ?> </a> <?php
									}
						 		?>