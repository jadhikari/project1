<script language="javascript" type="text/javascript">
        window.onload = function () {
            var fileUpload = document.getElementById("fileupload");
            fileUpload.onchange = function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("dvPreview");
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    for (var i = 0; i < fileUpload.files.length; i++) {
                        var file = fileUpload.files[i];
                        if (regex.test(file.name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = document.createElement("IMG");
                                img.height = "200";
                                img.width = "200";
                                img.src = e.target.result;
                                dvPreview.appendChild(img);
                            }
                            reader.readAsDataURL(file);
                        } else {
                            alert(file.name + " is not a valid image file.");
                            dvPreview.innerHTML = "";
                            return false;
                        }
                    }
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            }
        };
    </script>



<div class="row">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<div class="col-lg-offset-1 col-lg-7 col-md-offset-1 col-md-7  col-sm-offset-1 col-sm-7 col-xs-12">
				<table  class="panel table-responsive table-hover active">
					<br><br><br>
					<tr>

						<td align="right">
							<font face="Verdana" size="4">NAME OF PRODUCT : </font>
						</td>

						<td align="left">
							<font face="verdana" size="3"><input type="text" name="name" class="boxTypes"></font>
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
									<option></option>
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
									<option></option>
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
							<font face="verdana" size="3"><input type="int" name="price" class="boxTypes" placeholder="IN Rs "></font>
						</td>
					</tr>

				</table>
			</div>


			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div id="dvPreview" >
					<span class="glyphicon glyphicon-upload" aria-hidden="true" id="preview">

					</span>
        		</div>
				<input type="file" name="img" id="fileupload">
			</div>

			<div class="col-lg-offset-1 col-lg-10 col-lg-offset-1 col-md-offset-1 col-md-10 col-md-offset-1 col-sm-offset-1 col-sm-10 col-mg-offset-1">
				<h3>ABOUT</h3>
				<textarea name="about" class="boxTypes form-control">
					
				</textarea>
			</div>

		</div>
		<div class="col-lg-offset-5 col-lg-2 col-lg-offset-5 col-md-offset-5 col-md-2 col-md-offset-5 col-sm-offset-5 col-sm-2 col-mg-offset-5 " style=" color:black; font-size:18px;">
			<button name="submit" value="submit">SUBMIT</button>
		</div>
			
	</form>
</div>
<?php 
					if (isset($_POST['submit'])) {
						$name=$_POST['name'];
						$gender=$_POST['gender'];
						$about=$_POST['about'];
						$age=$_POST['age'];
						$price=$_POST['price'];
	if(strlen($name)<3){
      echo"PRODUCT NAME AT LAST 4 CHARACTER !!!";
      exit();
    	}
     if(strlen($about)<3){
       	echo"PRODUCT ABOUT AT LAST 30 CHARACTER !!!";
    	exit();
    	}

						$file=$_FILES['img']['name'];

						$file_size=$_FILES['img']['size'];

						$file_type=$_FILES['img']['type'];
						// echo date("Y-m-d H:i:s");
		
							
						if ($file_size<999999 &&  $file_type== "image/jpeg" || $file_type== "image/jpg" ||$file_type== "image/png") {
							$explode_value=explode('.', $file);
							
							$filename=sha1($explode_value[0].time());

							
							$mainimagename=$filename.'.'.$explode_value[1];
							if (move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$mainimagename )) {
								$sql="INSERT INTO addproduct(name,about,image,price,age,gender) VALUES 
								('$name','$about','$mainimagename','$price','$age','$gender')";
								mysqli_query($connection,$sql);
							}

						}

					}
				 ?>