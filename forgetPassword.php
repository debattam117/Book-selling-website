<?php
include("connection.php");
session_start();
?>



<?php			


if(isset($_POST['submit4']))
 { 

  $email = $_POST['email4'];
  $random=rand(1000,9999);
  $rand="$random";  //Convert integer to string
  
  $to="$email";
  $subject="Password Change Request.";
  $message="HI we have recieved a password change request for this account. Your Recovery no. is $random ";
  $from="Apna Market";
  $headers="From:$from";
  #$random=rand(100,999);
  
  if(mail($to,$subject,$message,$headers))
    {
		$array=array($rand,$email); 
		$_SESSION['user']=$array;     //_SESSION Variable always store string values.so we need to convert integer to string for store into session
		
	  header('location:forgetPassword1.php');
	}
  else
    {
	  header('location:forgetPassword.php');
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









   
  .navbar{
      display:flex;
      align-items:center:
      padding:30px;
      border:none;
      font-size:26px;
   }
 
  nav{
    flex:1;
    text-align:right;
 }

  nav ul{
   display:inline-block;
   list-style-type:none;
 }

 nav ul li{
     display:inline-block;
     margin-right:50px;

}

a{
  text-decoration:none;
  color:#638545;
}

p{
  font-family: 'Piedra', cursive;
  color:#555:
  
}

p1{
     font-family: 'Fira Sans', sans-serif; 

}







.container{
  width:1500px;
  height:770px;
  margin:auto;
  padding:10px  0;
  padding-left:25px;
  padding-right:50px;
  margin-top:-25px;
 
}

.row{
  display:flex;
  align-items:center;
  flex-wrap:wrap;
  justify-content:space-around;
  margin-right:-200px;
  margin-left:-190px;
}
.col-2{
   flex-basis:30%;
   min-width:100px;
   margin-top:0px;
  
}
.col-2 img{
    width:680px;
	height:450px;
   padding:100px 40px;
}

.btn{
   display:inline-block;
   background: #ff0000;
   color:#fff;
   padding:8px 30px;
   margin: 30px 0;
   border-radius:30px;
   transition:background 0.5s;
}

.btn:hover{
    background:#B02CA6;
}




.form-container{
       background:#fff;
       width:410px;
       height:450px;
       position:relative;
       text-align:center;
       padding:30px 10px;
       margin-right:20px;
       box-shadow:0 0 20px 0px rgba(0,0,0,0.1);
      overflow:hidden;  
	  border-radius:20px;
background-size: 1900px 1100px;
	background-repeat: no-repeat;
	 background-image:url(bookback8.jpg);
}

.logo{
        text-align:center;  
       margin:auto;
  padding-left:25px;
  padding-right:70px;
}
 
.form-container span{
       font-weight:bold;
       padding:10px 10px 
       color:#555;
      
       cursor:pointer;
       width:200px;
       display:inline-block;
	   font-size:23px;
	   font-family: 'Roboto Mono', monospace;
      
}

.form-btn{
   display:inline-block;
   
   margin-top:0px;
}

.form-container form{
   max-width:250px;
   padding:15 30px;
   position:absolute;
   top:130px;
  transition:transform 1s;
  
  
}

form input{
  width:300px;
  height:25px;
  margin:12px 0;
  padding:0 10px;
  border:0;
  font-size:20px;
  background:transparent;
  border-bottom:1px solid black;
  outline:0;
  
}

form .btn{
   width:300px;
   height:35px;
   border:none;
   cursor:pointer;
   margin:20px 0;
   font-size:19px;
}

form .btn:focus{
   outline:none;
}








.form-btn span{
   display:inline-block;
   width:300px;
   margin-left:-10px;
   font-size:30px;
   margin-top:15px;
}




#PasswordForm{
 left:33px;
 margin-top:15px;
}





  



form .btn{
  margin-right:15px;
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





<div class="container">

      <div class="row">

        <div class="col-2">
        <img src="book4.png">
       </div>
      
      <div class="col-2">
         <div class="form-container">    
   
               <div class="form-btn">
                  
                   <span>Forget Password</span>
                   
                
                
               </div>
   
               <form id="PasswordForm" action="" method="POST">
                   <input type="email" name ="email4" placeholder="Email" required>
                   <button type="submit" name="submit4" class="btn">Submit</button>
			  </form>
		 </div>
	   </div>
     </div>
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