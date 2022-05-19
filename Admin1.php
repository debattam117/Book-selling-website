<?php
include("connection.php");
session_start();
?>






<html>
<head>

<style>




form input{
  width:400px;
  height:48px;
  margin:30px 0;
  padding:0 10px;
  border:0;
  font-size:30px;
  background:transparent;
  border-bottom:1px solid black;
  outline:0;
  
}


form .btn{
   width:400px;
   height:50px;
   border:none;
   cursor:pointer;
   margin:20px 0;
   font-size:25px;
   color:orange;
   
  
  
}



</style>



</head>
<title>ADMIN</title>
<body>
 <h1>ALL BOOKS</h1>
 <form id="exclusivebook" action="" method="POST" enctype="multipart/form-data">
                   <input type="text" name="refid" placeholder="Reference_Id" maxlength="15" required >
				   <input type="text" name="bookname" placeholder="Book Name"required>
				   <input type="text" name="authorname" placeholder="Author Name"required>
                   <input type="number" name="costprice" placeholder="Cost price"required><br>
				   <input type="number" name="markprice" placeholder="Mark price"required>
				   <input type="number" name="sellprice" placeholder="Sell price"required>
				   <input type="number" name="rating" placeholder="Rating"required>
                   <input type="text" name="age" placeholder="Age Reference"required><br>
				   <input type="text" name="booktype" placeholder="Book Type"required>
      			   <input type="text" name="language" placeholder="Book Language" required>
				  <input type="text" name="bookcategory" placeholder="Book Category"  required><br>
				  <textarea rows="20"  cols="200"name="bookdescription" placeholder="Book Description" maxlength="400" required> </textarea><br>
				   <input type="file" name="uploadFile" required>
                   <button type="submit" name="submit" class="btn">UPLOAD</button>
				   
				   
				   
                   
 </form>
 
 </body>
 </html>
 
 <?php

if(isset($_POST['submit']))
{
	$referid = $_POST['refid'];
	$bokname = $_POST['bookname'];
	$bokname=str_replace("'","\'",$bokname);##Because apostrophes values are not accepted by php when we are inserting text
	$authname=$_POST['authorname'];
	$bookdesc=$_POST['bookdescription'];
	$bookdesc=str_replace("'","\'",$bookdesc);##Because apostrophes values are not accepted by php when we are inserting text
	$costp=$_POST['costprice'];
	$markp=$_POST['markprice'];
	$sellp=$_POST['sellprice'];
	$rate=$_POST['rating'];
	$age=$_POST['age'];
	$boktype=$_POST['booktype'];
	$filename=$_FILES["uploadFile"]["name"];
    $tempname=$_FILES["uploadFile"]["tmp_name"];
	$folder="exclusivebook/".$filename;  #folder name is storybook
	$lang=$_POST['language'];
	$cat=$_POST['bookcategory'];
	
	if($referid!=""&&$bokname!=""&&$authname!=""&&$bookdesc!=""&&$costp!=""&&$markp!=""&&$sellp!=""&&$rate!=""&&$filename!=""&&$age!=""&&$boktype!=""&&$lang!=""&&$cat!="")
		
		{
			
	move_uploaded_file($tempname,$folder);
    echo $folder;
	$query="INSERT INTO EXCLUSIVEBOOK VALUES('$referid','$bokname','$authname','$bookdesc','$costp','$markp','$sellp','$rate','$age','$boktype','$folder','$lang','$cat')";
	$data=mysqli_query($conn,$query);
	
	

    if($data)
	{
		echo "insert";
		
		
	}
	else
	{
		echo"not inserted";
	}
    
		
			
			
		
}
	
}
?>


