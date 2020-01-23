<?php
if(isset($_GET['id'])){
		$id=$_GET['id'];

		 // echo $id;
		

		if(isset($_GET['name']))
		{
			$name=$_GET['name'];

			// echo $name;
			// die();

			$sql="SELECT * FROM addproduct where id = '$id'";
			$query=mysqli_query($connection,$sql);
			$result=mysqli_fetch_array($query);
		
	
?>
<div class= "row">
	<div class= "col-lg-offset-4 col-lg-4 col-lg-offset-4 col-md-offset-4 col-md-4 col-md-offset-4 col-sm-offset-4 col-sm-4 col-sm-offset-4">
		<img class="img-responsive" src="admin/upload/<?php echo $name;}}?>">
		
	</div>
</div>
<div class="row">

				<!-- for name ,gender,age group,price of the product -->
	<div class="row">
		<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
				<b>NAME OF PRODUCT :- &nbsp;&nbsp;<?php echo $result['name']; ?></b><br/>
				<b>GENDER :- &nbsp;&nbsp;<?php echo $result['gender']; ?></b><br/>
				<b>AGE GROUP :- &nbsp;&nbsp;<?php echo $result['age']; ?></b><br/>
				<b>PRICE :- &nbsp;&nbsp;<?php echo $result['price']; ?></b>		
		</div>
	</div>

				<!-- for detail of the product -->
	<div class="row">
		<h1><b>ABOUT PRODUCT</b></h1>
		<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<?php echo $result['about']; ?>
		</div>
	</div>

				<!-- for purchase button -->
	<div class= "row">
		<div class="col-lg-offset-10 col-md-offset-10 col-sm-offset-10 col-xs-offset-10">
			<button onclick="window.location.href='?p=buy&id=<?php echo $result['id']; ?>& name=<?php echo $result['image']; ?>'">Purchase</button>
			<!-- <a href="?p=buy">Continue</a> -->
		</div>
	</div>
</div>

