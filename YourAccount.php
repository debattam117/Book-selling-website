<?php
include("connection.php");
session_start();
?>



<?php
if(isset($_POST['submit1']))
{
	$email = $_POST['email1'];
	$pwd = $_POST['password1'];
	
	$query="SELECT * FROM USER WHERE EMAIL='$email'&& PASSWORD='$pwd'";
	
	$data=mysqli_query($conn,$query);
	
	$total=mysqli_num_rows($data);
	
	
	
	if($total==1)
	{
		$_SESSION['user']=$email;
		header("location:home2.php");
	}
	else
	{
		echo"login failed".mysqli_connect_error();
		header('location:login.php');
	}
	
}
?>

<?php

if(isset($_POST['submit']))
{
	$eml = $_POST['email'];
	$psswd = $_POST['password'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$username=$_POST['username'];
	$cpsswd=$_POST['cnpassword'];
	
	if($eml!=""&&$psswd!=""&&$fname!=""&&$lname!=""&&$username!="")
		
		{
			if($psswd==$cpsswd)
			{
	
	$query1="INSERT INTO USER VALUES('$username','$fname','$lname','$eml','$psswd','$cpsswd')";
	
	$data=mysqli_query($conn,$query1);
	
	
	if($data)
	{
		//echo "data in";
	}
			}
			else{
				//echo"Please match your passwor.";
				
			}
			
			
		
}
	else
	{
		echo"not in failed".mysqli_connect_error();
	}
}
?>



















<html>
<head>
<title> PRODUCT </title>


<link rel="stylesheet" href="style.css">



   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">







<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto+Mono:wght@100;500&display=swap" rel="stylesheet">





 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<style>

@import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&family=Montserrat:wght@300&family=Open+Sans:wght@300&family=Playfair+Display&family=Raleway:wght@300&display=swap');



*
{
  margin: 0px;
  padding: 0px;
}


html,body{
	width:100%;
	height:100%;
	margin:0px;
	padding:0px;
	overflow-x:hidden;
	background-repeat: no-repeat;
  background-attachment: fixed;
   background-size: 100% 100%;
    
 
}

::-webkit-scrollbar{
 display:none;
}


.whole
{
	
	margin:auto;
}













.content{
	margin:auto;
	 width:1600px;
	height:650px;
   
    padding-top:23px;
    
	 background:none;
	
}






















.nav
{

 background: black;
 padding-left: 149px;
 font-size: 23px;
 height: 52px;
 margin-top: -25px;
 position: sticky;
 z-index: 1;
 width:1403px;
 
}



.nav ul 
{
  display: inline;
  list-style-type: none;
  
}

.nav ul li
{
  border: 1px solid black;
  width: 200px;
  height:48px;
  text-align: center;
  line-height: 50px;
  float:left;
  position: relative;
  background:black;
  
}



.nav ul li a
{
  text-decoration: none;
  color: white;
 display: block;
}


.nav ul li  a:hover
{
  background-color: green;
}


.nav a.active
{
 background:green;
 
}


.nav ul ul
{
  position: absolute;
  display: none;
}

.nav ul li:hover > ul
{
  display: block;
}









 





























</style>


</head>
<body background="bookback7.jpg">














  










<div class ="whole">



<div class="content">




<div class="nav">
         
    <ul>

     <li> <a class="active" href="home1.php">Home</a>
      
    </li>


     <li> <a href="">Product &#8595;</a>
      <ul>
        <li> <a href="">Featured</a></li>
        <li> <a href="">Story Books</a></li>
        <li> <a href="">Old Books</a></li>
        <li> <a href="">2nd Hand</a></li>
     </ul>
    </li>

     <li><a href="">Sale &#8595;</a>
      <ul>
        <li> <a href="">Child</a></li>
        <li> <a href="">Children</a></li>
        <li> <a href="">dog</a></li>
        <li> <a href="">Horse</a></li>
     </ul>
    </li>

     <li> <a href="">Child &#8595;</a>
      <ul>
        <li> <a href="">Mythology</a></li>
        <li> <a href="">Moral Story</a></li>
        <li> <a href="">Animals</a></li>
        <li> <a href="">Bed Time's</a></li>
     </ul>
   </li>     


     <li><a href="">Academics &#8595;</a>
      <ul>
        <li> <a href="">Science</a></li>
        <li> <a href="">Language</a></li>
        <li> <a href="">Commerce</a></li>
        <li> <a href="">Humanities</a></li>
     </ul>
    </li>

     <li> <a href="">College &#8595;</a>
      <ul>
        <li> <a href="">CSE</a></li>
        <li> <a href="">IT</a></li>
        <li> <a href="">BCA</a></li>
        <li> <a href="">BME</a></li>
        <li> <a href="">ECE</a></li>
        <li> <a href="">ME</a></li>
     </ul>
    </li>
    </ul>  
  </div>










  
  
  
  
  
  
  
</div>



</div>




<script>

if(window.history.replaceState){
	window.history.replaceState(null,null,window.location.href)
}



</script>

</body>
</html>