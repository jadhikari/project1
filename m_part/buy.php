<?php 
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		// echo $id;
		// die();
	$sql= "SELECT * FROM addproduct where id='$id'";
	$query= mysqli_query($connection,$sql);
	$result=mysqli_fetch_array($query);
?>
<div class= "row">
	<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
		<h3 align="center"><b>FILL THE FORM TO PURCHASE PRODUCT</b></h3>
		<table>
			<TR>
				<td>ID :- &nbsp;&nbsp; <?php  echo $id; ?></td>
			</TR>
			<tr>
				<td>NAME :- &nbsp;&nbsp; <?php  echo $result['name']; ?></td>
			</tr>
			<tr>
				<td>PRICE:- &nbsp;&nbsp; <?php  echo $result['price']; ?></td>
			</tr>
		</table>
	</div>
</div>
	<BR><BR><BR>

<div class= "row">
	<div class="col-lg-offset-2 col-lg-8 col-lg-offset-2 col-md-offset-2 col-md-8 col-md-offset-2 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-xs-offset-2 col-xs-8 col-xs-offset-2">		
		<form action="" method="POST" >
			<table class="table">
				<TR>
					<td>F.NAME OF COSTUMER :- &nbsp;&nbsp; </td>
					<TD><INPUT TYPE= "TEXT" NAME ="FNAME"></TD>
				</TR>
				<TR>
					<td>L.NAME OF COSTUMER :- &nbsp;&nbsp; </td>
					<TD><INPUT TYPE= "TEXT" NAME ="LNAME"></TD>
				</TR>
				<TR>
					<td>DATE OF PURCHASE :- &nbsp;&nbsp; </td> 
					<TD>
						<?php 
							$d= DATE('Y'.'M'.'d'.'D');
							ECHO $d;
				         ?>
					</TD>
				</TR>
				<tr>
					<td>ENTER THE DRAFT NUMBER:- &nbsp;&nbsp; </td>
					<TD><INPUT TYPE="INT" NAME="draft"</TD>
				</tr>
				<tr>
					<br>
					<td><input type="submit" name="purchase" value=" DONE"></td>
				</tr>
			</table>
		</form>
	</div>
</div>

<?php 
	}
?>