<?php
	$page=$_GET["page"];
	 //echo $page;
	if ($page=="" || $page=="1") 
	{
		$page=0;
	}
	else
	{
		$page=($page*8)-8;
		
	}

 
	$sql="SELECT * FROM addproduct  where gender='female' limit $page,8";
	$query=mysqli_query($connection , $sql);

 ?>
<div>
					<div class="row">
						<?php
						while($result=mysqli_fetch_array($query))
						{ 
						
								// echo $result['image'];
							// echo $result['name'];
							 // die();	
							
						 ?>
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
						    <img src="admin/upload/<?php echo $result['image']; ?>" class=" img-responsive img" >
						    <b>TOCAN NUNBER :- <?php  echo $result['id']; ?></b><BR>TO GET MORE INFORMATION AND BUYING PROCESS <br>
						    <button class="button list-group-item-info" onclick="window.location.href='?p=detail&id=<?php echo $result['id']; ?>& name=<?php echo $result['image']; ?>'">DETAIL</button>
						    <button class="button list-group-item-info" onclick="window.location.href='?p=buy&id=<?php echo $result['id']; ?>& name=<?php echo $result['image']; ?>'">BUY</button> 
						</div>
						<?php 
							}
						?>
						<?php
						$sql="SELECT * FROM addproduct  where gender='f' ";
						$query=mysqli_query($connection , $sql);
						$count=mysqli_num_rows($query);
						  // echo $count;
						
								$a=$count/8;
								$a= ceil($a);
								//echo $a;
								//die();
								?>
					</div>
					<div class="row">
								<p id="paging">
								<?php
									for ($b=1; $b<=$a; $b++) 
									{ 
										?> <a href="?p=male&page=<?php echo $b ?> "> <?php echo $b,""; ?> </a> <?php
									}
						 		?>
						 		</p>
					</div>
			</div>
			