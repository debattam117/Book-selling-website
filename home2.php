<?php
include("connection.php");
session_start();



$query="SELECT * FROM EXCLUSIVEBOOK ";
$data=mysqli_query($conn,$query);

$total=mysqli_fetch_row($data);








$sess=$_SESSION['user'];
if($sess==true)
{
$query="select * from user where email='$sess'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
}
else
{
	header('location:login.php');
}





?>








<html>
    <title>The Gallery</title>

<head>

     
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  
  

<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&family=Playfair+Display:ital@1&display=swap');

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






.container
{
  width:1600px;
  margin:auto;
  
  font-size:15px;
  
}

html
{

  font-size: 62.5%;
}

.header_top
{

  background-color: green;
  /*box-shadow: 5px 0px 18px black;*/
 /* box-shadow: 5px 10px 18px #888888;*/
height:35px;
}

.col-2
{
  flex-basis: 50%;
  margin-right: 40px;
  margin-top: 5px;
}
.col-1
{
  flex-basis: 50%;
  
}


.col-1 h1{
    font-size: 15px;
    font-family: 'Barlow Condensed', sans-serif;
    letter-spacing: 1px;
    padding-top: 5px;
    margin-left: 190px;
    color: white;
}

.row1
{
    display: flex;
    justify-content:  space-between;
    
}

.col-2 a{
    text-decoration:none;
  color:white;
  font-family: 'Roboto Mono', monospace;
  font-size: 14px;
  padding-left: 10px;
}

.col-2 ul li
{
  display:inline-block;
   list-style-type:none;
   padding-left: 5px;
  text-align: center;
}
.col-2 ul
{
  padding-left: 180px;

}

hr{
 
  border-top: 1px solid #e6e6e6;
  width:1000%;
  margin-left:-3000px
}

.crimson-text
{
  color: #e6e6e6;
  font-size: 20px;
}


.row-2
{
  display: flex;
  justify-content:  space-between;
  padding-top: 5px;
}

.col-3
{
  flex-basis: 30%;
  display:flex;
  justify-content:  space-between;
  padding-top: 20px;
  margin-left: 75px;
}
.col-4
{
  flex-basis: 30%;
}

.col-5
{
  flex-basis: 30%;
  display:flex;
  justify-content:  space-between;
  margin-left: 60px;
  margin-bottom: 20px;
  margin-top: 10px;
}

.loc-1
{
  flex-basis: 27%;
  
}
.loc-2
{
  flex-basis: 73%;
}

.loc-3
{
  flex-basis: 5%;
  border-left: 1px solid #e6e6e6;
  height: 50px;
  margin-top: 12px;
}

.loc-4
{
  
  flex-basis: 30%;
  
}

.loc-5
{
  flex-basis: 70%;
}

.emni
{
  border: 1px solid #e6e6e6;
  height:40px;
  width:38px;
  margin-left: 130px;
  margin-top: 25px;
}



.col-4 img
{
  margin-left:10px;
  
}

.col-3 p
{
  color:black;
  font-family: 'Roboto Mono', monospace;
}

.but
{
   Margin-top: 25px;
   margin-left: 10px;
   height: 41.5px;
   border: 1px solid #e6e6e6;
  width: 190px;
}



::-webkit-input-placeholder{
	color:black;
  font-size: 20px;
	font-family: 'Roboto Mono', monospace;
  padding-left: 26px;
 
}

.row slider 
{
  display: flex;
  flex-wrap: wrap;
}

.col-6 {
   
  position: relative;
  text-align: center;
 
 
}

.write
{
  position: absolute;
  bottom: 308px;
  left: 16px;
 
}

.write1
{
  position: absolute;
  bottom: 308px;
  left: 16px;

}

.write2
{
  position: absolute;
  bottom: 108px;
  left: 16px;

}

.box
{
  height : 500px;
  width: 100%;
  
}

p15
{
  position: absolute;
  margin-top: 2000px;
}

@keyframes slide {
0%{
    transform: translateX(-700px);
}

100%{
  transform: translateX(0px);
}
  
}

.btn{
   display:inline-block;
   background: #ff0000;
   color:#fff;
   padding:8px 30px;
   
   border-radius:30px;
   transition:background 0.5s;
}

.btn:hover{
    background:#B02CA6;
}




.header_top
{
  
  font-size: 5px;
 
}

.header_middle
{
 background-color: white;
 margin-top: 15px;
 margin-bottom: 70px;
 height:100px;
 
}


.header_bottom
{
  
 position: sticky;
}






/*-------------------------Drop down navbar design-----------------------------*/








.navy
{
	
	position:relative;
}


.nav
{
 width:1405px;
 background: black;
 padding-left: 195px;
 font-size: 25px;
 height: 57px;
 margin-top: -25px;
 position: absolute;
 z-index: 1;

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
  height:55px;
  text-align: center;
  line-height: 55px;
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




























.bodi
{
  
  
  width: 1600px;
  margin-top:100px ;
  height: 150px;
  font-size: 100px;
 padding-top:50px;
}

.bodi p1
{
   /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;*/
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 40px;
    margin-left: 590PX;
}   
.bodi2 p2
{
  font-size: 20px;
  margin-left: 470px;
  
  
}

.bodi2
{
  margin-top: 15px;
}

.bodi2 p3
{
   
  font-size: 20px;
  margin-left: 585px;
}






/*-------------------------exclusive  book-----------------------------*/
.storys
{
	 background-size: 76200px 7400px;
	background-repeat: no-repeat;
	 /*background-image:url(bookback8.jpg);*/
	 
	 width:1470px;
	height:680px;
	padding-right:-22px;
	
	
	/* box-shadow:0 0 20px 0 rgba(0,0,0,0.5);*/
    cursor:pointer;
	border-radius:20px;
	padding-top:-40px;
	
}
.storys-books .col-21
{
	text-align:center;
	margin-bottom:10px;
	font-size:40px;
	font-family: 'Roboto Mono', monospace;
	color:#505050;
	
}




.col-5 img
{
	
	width:170px;
   height:250px;
   margin-top:30px;
   padding-left:-44px;
  margin-right:-50px;
  
	
}
.col-5
{
	height:600px;
	padding-top:-50px;
   
	
	
}


.storys-books .row{
	
	margin-right:100px;
}

.book-title {
	font-family: 'Roboto Mono', monospace;
	font-size:20px;
	
	padding-top:10px;
}
.author{
	font-family: 'Roboto Mono', monospace;
	font-size:13px;
	padding-left:0px;
	color:blue;
	
	
}



.col-5 .rating{
	padding-top:15px;
	padding-left:0px;
	font-size:15px;
	color:#FFD700;
}


.col-5 p
{
	padding-left:0px;
	font-size:20px;
    color:red;
	font-family: 'Roboto Mono', monospace;
}





.product-name
{
	cursor:pointer;
    transition:transform 0.5s;
}


.product-name:hover{
  transform:translateY(-10px);
}

.storys-books
{
	margin:auto;
	width:1490px;
	height:700px;
    margin-top:-70px;
    padding-top:0px;
    padding-left:15px;
    padding-right:100px;
	background:none;
	 
   
	
	
	
}



.col-21 
{
	padding-top:1px;
	padding-right:120px;
	
}

/*.col-21 h2
{
	font-family: 'Roboto Mono', monospace;
	/*font-family:Impact, fantasy;*
	font-size:40px;
	color:#4B0082;
	padding-bottom:-100px;
	margin-top:10px;
}*/


.slider .slick-prev
{
	
background:rgba( 0, 0, 0, 0.3 );
padding:-60px;
height:100px;
width:60px;
margin-top:-30px;
margin-left:-40px;
transition:0.5s;
border-radius:10px;
z-index:1;
}


.slider .slick-prev:hover
{
	
background:rgba(11,156,49,1);
padding:-60px;
height:100px;
width:60px;
margin-top:-30px;
margin-left:-40px;

z-index:1;
}



.slider .slick-next
{
padding-left:80px;
background:rgba(0,0,0,0.3);

padding:30px;
height:100px;
width:30px;
margin-right:-78px;
margin-top:-30px;
transition:0.5s;
border-radius:10px;
 transition:transform 0.5s;
}


.slider .slick-next:hover
{
	padding-left:80px;
background:rgba(11,156,49,1);
padding:30px;
height:100px;
width:30px;
margin-right:-78px;
margin-top:-30px;

}


.slider{
margin-left:99px;	
height:430px;

}



.story a{
  text-decoration:none;
  color:white;
  font-family: 'Roboto Mono', monospace;
}












/*-------------------------Category book-----------------------------*/






.cat
{
	
	height:500px;
	width:1185px;
	margin-left:170px;
	margin-bottom:100px;
	display:flex;
	margin-top:-200px;
}



.a
{
	flex-basis:25%;
	height:430;
	width:100;
	/*border:2px solid red;*/
	padding:10px 10px;
}

.b
{
	flex-basis:75%;
	height:445;
	width:100;
	
	
}

.c
{
	
	height:222px;
	width:880px;
	display:flex;
}


.d
{
	
	height:230px;
	width:880px;
	display:flex;
}


.e
{
	/*border:2px solid pink;*/
	flex-basis:60%;
    padding:10px 10px;
 
}

.f
{  
    /*border:2px solid violet;*/
    flex-basis:40%;
	 padding:10px 10px;
	
}

.g
{
	/*border:2px solid violet;*/
    flex-basis:40%;
	 padding:10px 10px;
	
}

.h
{
	/*border:2px solid pink;*/
	flex-basis:60%;
  padding:10px 10px;
	
}





.comic img
{
	transform: scale(1);
	transition:0.3s ease-in-out;
}

.comic :hover img
{
	transform: scale(1.1);
}


figure
{
	overflow:hidden;
}


.art img
{
	transform: scale(1);
	transition:0.3s ease-in-out;
}

.art :hover img
{
	transform: scale(1.1);
}


.business img
{
	transform: scale(1);
	transition:0.3s ease-in-out;
}

.business :hover img
{
	transform: scale(1.1);
}

.child img
{
	transform: scale(1);
	transition:0.3s ease-in-out;
}

.child :hover img
{
	transform: scale(1.1);
}

.travel img
{
	transform: scale(1);
	transition:0.3s ease-in-out;
}

.travel :hover img
{
	transform: scale(1.1);
}











/*-------------------------Fiction book-----------------------------*/



.story-book1
{
	 margin:auto;
	 width:1600px;
	height:<?php echo $count; ?> px;
   
    padding-top:10px;
    
	 background:none;
	
 }



.story1
{
	
	margin-top:00px;
	height:<?php echo $count; ?> px;
	
	 
	
	

}



.row11{
	display:flex;
	flex-wrap: wrap;
	padding-bottom:30px;
   padding-right:70px;
	
}

.row11 .col-41{
	
	
	flex-basis:20%;
	
	
}


.col-41 img
{
	
	width:170px;
   height:250px;
   margin-top:30px;
   padding-left:20px;
   
  
	
}

.col-41 .book-title1 {
	font-family: 'Roboto Mono', monospace;
	font-size:20px;
	padding-left:20px;
	padding-top:10px;
}
.col-41 .author1{
	font-family: 'Roboto Mono', monospace;
	font-size:13px;
	padding-left:20px;
	color:blue;
	
	
}



.col-41 .rating1{
	padding-top:15px;
	margin-left:20px;
	font-size:15px;
	color:#FFD700;
}


.col-41 p
{
	padding-left:20px;
	font-size:20px;
    color:red;
	font-family: 'Roboto Mono', monospace;
}


.fixedImage1
{
	padding-left:
	text-align:left;
}


.story-book1 .row11{   /*throw this code we can change the padding-top of the books first row and bottom of the book list*/
	
	padding-left:150px;
	margin-left:8px;
	margin-right:93px;
	padding-top:28px;
	padding-bottom:85px;
}


.product-name1
{
	cursor:pointer;
    transition:transform 0.5s;
}


.product-name1:hover{
  transform:translateY(-10px);
}






/*-------------------------Fiction book   header adjustment-----------------------------*/




p33                          /*through this code we can change the shape size color of book type name that is tory book*/
{
	
     font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	font-size:43px;
	margin-left:177px;
	padding-top:70px;
	color:black;
	
}
.col-21                       /*through this code we can only change the padding of the heading of books from top and bottom*/
{
	padding-top:53px;
	
}

.bit1{
	flex:50%;
	margin-top:15px;
	padding-top:15px;
}
.bit2
{
	flex:50%;
	padding-top:25px;
	padding-right:30px;
}


p34                          /*through this code we can change the shape size color of book type name that is tory book*/
{
	
  font-family: 'Roboto Mono', monospace;
	font-size:26px;
	margin-left:470px;
	color:#4B0082;
	flex-basis:30%;
	padding-top:120px;
	
}

p34 a
{
	
	text-decoration:none;
}

.bit2 .btn:hover
{
	background-color:green;
}










/*-------------------------Discount Poster-----------------------------*/



.discount
{
	/*border:2px solid black;*/
	width:1190px;
	height:160px;
	margin-left:178px;
   
}




.discount img
{
	transform: scale(1);
	transition:0.3s ease-in-out;
}

.discount :hover img
{
	transform: scale(1.08);
}

/*-------------------------Footer design-----------------------------*/


.footer
{
	width:1538px;
	
	
	height:366px;
	color:grey;
	background:black;
}


.main-foot
{
	display:flex;
	padding-bottom:50px;
	margin-left:50px;
}

.left-box
{
	flex-basis:40%;
	font-size:20px;
	font-family: 'Roboto Mono', monospace;
}

.center-box
{
	flex-basis:30%;
	font-size:20px;
	font-family: 'Roboto Mono', monospace;
}

.right-box
{
	flex-basis:30%;
	font-family: 'Roboto Mono', monospace;
	font-size:20px;

}


.place
{
	padding-top:35px;
}

.center-box .content
{
	padding-left:110px;
}


.left-box .content
{
	padding-left:20px;
}

.social
{
	padding-top:40px;
	color:white;
	
}

.social a
{
	
color:white;
font-size:20px;	
	
}


.right-box .content
{
	padding-left:90px;
	padding-top:30px;
}

.email input
{
	margin-top:10px;
	width:270px;
	font-size:20px;
	outline:none;
	baground:transparent;
	height:35px;
	border-radius:15px;
	padding-left:10px;
	padding-bottom:10px;
}




.msg textarea
{
	border-radius:15px;
	font-size:20px;
	margin-top:10px;
	width:270px;
	outline:none;
	height:50px;
	padding-left:10px;
}

.msg  .mssage
{
	margin-top:10px;
}





.right-box button
{
	margin-left:3px;
	margin-top:30px;
	background:green;
	border:none;
	font-size:20px;
	width:100px;
	border-radius:20px;
	color:white;
	cursor:pointer;
	height:35px;
}



.social a:hover
{
	color:green;
	
	transition:0.3s ease-in-out;
}



</style>

</head>

<body>

<div class="header">
  <div class="container">
  
  
  
  
  
  
  
   <div class="header_top">
     <div class="container">
         <div class="row1">
            <div class="col-1">
              <h1>“One best book is equal to hundred good friends but one good friend is equal to a library.”</h1>
            </div>
             <div class="col-2">

              <ul>
               <li><a href="#"><?php echo "Hi! ".$result['user_name']    ?></a></li><span class="crimson-text">&nbsp;&nbsp;&#124;</span>
               
               <li><a href="">Checkout</a></li><span class="crimson-text">&nbsp;&nbsp;&#124;</span>
              
               
              
               <li><a href="">My Account</a></li><span class="crimson-text">&nbsp;&nbsp;&#124;</span>
			   <li><a href="logout.php">Logout</a></li>
               
              </ul>
                
            </div>
         </div>
     </div>
	   
	 
    </div>
  

    
  
  
   <div class="header_middle">
        <div class="row-2">
		
		
		
		
		
		 <div class="col-5">
            <form action="search2.php" method="POST" id="frm">
             <div class="loc-4" ><div class="emni"><button  type="submit" name="sub" style=" outline: none  ;  border: none; background-color: green; height:42px; width:40px; border-top-left-radius:10px; border-bottom-left-radius:10px;"><i class="fa fa-search" style="margin-top: 1px; margin-left: 3px; font-size: 20px; color: white;"></i></button></div></div>
             <div class="loc-5"><input type="text" class="but" name="box"  placeholder="Search.." style="margin-left: 171px; margin-top: -40.9px; outline: none; font-size: 20px; padding-left: 20px; background-color: 	#DCDCDC; border-top-right-radius:10px; border-bottom-right-radius:10px;" ></div>
             </form>
          </div>
		
		

         
          <div class="col-4">
            <img src="log7.png" width="325px" height="70px" style="margin-left: 65px; margin-top: 20px;">
          </div>

         
		  
		  
		   <div class="col-3">
              <div class="loc-1">
                <p style="color:green; font-weight: bold; margin-top: 10px; margin-left: 30px;">Location</p>
                <p style="margin-top: 15px; margin-left: 30px;">Kalyani</p>
              </div>
              <div class="loc-3"></div>
              
              <div class="loc-2">
                <p style="color:green; font-weight: bold; margin-top: 10px;" >Call Here</p>
                <p style="margin-top: 15px;">9739034909</p>
              </div>
          </div>

		  
		  
		  
		  
		  
		  

        </div>
    </div>
     
    
 <div class="navy">
   <div class="nav">
         
    <ul>

     <li> <a class="active" href="home.html">Home</a>
      
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
    


   

    <div class="header_bottom">
        
         <div class="box"> 
             <div class="row sliders">
			 
			 
			 

               
                <div class="col-6"><img src="poster2.jpg" style=" width: 1800px; height: 700px; cursor: pointer;">
                  <div class="write">
                     
                    <p style="font-size: 30px; margin-left:60px ; animation: slide 1.5s ease-in;">Exclusive Offers -25% Off This Week</p>
                    <h1 style="font-family: 'Playfair Display', serif; font-size: 60px; margin-left: 70px; line-height: 10px; margin-bottom: 50px; animation: slide 1s ease-in; margin-top: 30px;"> New Book Arrivals</h1>
                    <p style="font-size: 25px; margin-right: 240px; animation: slide 1.5s ease-in;">Starting At Rs.99</p>
                    <a href=""class="btn" style="text-decoration: none; margin-top: 50px; margin-right: 270px; animation: slide 1.5s step-end;">Check out &#x2794;</a>
                  </div>

                </div>
				
				
				
				 <div class="col-6"><img src="poster6.jpg" style=" width: 2300px; height: 700px; cursor: pointer;">
                  <div class="write1">
                    
                    <p style="font-size: 30px; margin-left:80px ;color:white ;">Exclusive Offers -10% Off This Week</p>
                    <h1 style="font-family: 'Playfair Display', serif; font-size: 60px; margin-left: -120px; line-height: 10px; margin-bottom: 60px; margin-top: 30px; color:white ;"> Story Books</h1>
                    <p style="font-size: 25px; margin-right: 215px; color:white ;">Starting At Rs.299</p>
                    <a href=""class="btn" style="text-decoration: none; margin-top: 50px; margin-right: 290px;">Check out &#x2794;</a>
                  
                  </div>
                
                </div>

				
				
				
				
				
				

               

                <div class="col-6"><img src="poster5.jpg" style=" width: 1600px; height: 500px; cursor: pointer;">
                  <div class="write2">
                    
                    <p style="font-size: 30px; margin-left:80px ;color:white ;">Exclusive Offers -10% Off This Week</p>
                    <h1 style="font-family: 'Playfair Display', serif; font-size: 60px; margin-left: -130px; line-height: 10px; margin-bottom: 60px; margin-top: 30px; color:white ;"> Story Books</h1>
                    <p style="font-size: 25px; margin-right: 210px; color:white ;">Starting At Rs.299</p>
                    <a href=""class="btn" style="text-decoration: none; margin-top: 50px; margin-right: 280px;">Check out &#x2794;</a>
                  
                  </div>
                
                </div>













             </div>
         </div>

    </div>






    



<div class="storys-books">
  <div class="storys">
  
                
		 <div class="bodi">
       
          <p1>TOP INTERESTING </p1><br>
          <div class="bodi2">
            <p2> Browse the collection of our best selling and top interresting products.<br></p2>
            <p3>ll definitely find what you are looking for..</p3>
          </div>

           </div>
  
  
				
            <div class="row slider">
			
			 <?php 
					if($total!=0)
					{
						
						$query1="SELECT * FROM EXCLUSIVEBOOK where bookcategory='Exclusive' ";
                        $edata=mysqli_query($conn,$query1);
						while($result=mysqli_fetch_assoc($edata))
						{
						
						
				?>
				
			
                <div class="col-5">
				    <div class="fixedImage">
					   <div class="product-name">
                       <a  href="ParticularBookPage2.php?value=<?php echo $result['bookname'];?>"> 
					  <?php
					    
						echo"
						 <img src= '".$result['picsource']."'>
                            ";
							
						
					    ?>	
					   
					   </a>
                            <h3 class="book-title"><?php echo substr($result['bookname'],0,15); ?></h3>
                            <span class="author"><?php echo substr($result['authorname'],0,23); ?></span>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p><span>&#8377;</span><?php echo $result['sellprice']; ?>&nbsp;&nbsp;&nbsp;<del><span>&#8377;</span><?php echo $result['markprice']; ?></del></p>
                            
                        </div>
                </div>
			</div>
			<?php	
			
			}
					}


          else{
               echo "no data";
		  }			  

		?>	
		
		  </div>
	    </div>
	</div>







<div class="discount">


<figure><a href="home1.php"><img src="disc1.jpg" style=" height:160px; width:1190px; ">





</a>



</figure>

</div>




















<div class="story-book1">
 <div class="story1"> 
   <div class="col-21" style= "display:flex;">
   
        <div class="bit1" style= "flex:50%;">
                    <p33>STORY &nbsp; BOOKS</p33>
                </div>
					
			    <div class="bit2" style= "flex:50%;">
                   <p34> <a class="btn" href="SinglePage.php?value1=fiction">VIEW ALL</a></p34>
                </div>
                  
			    
    </div>
    <div class="row11">
	  
	   <?php 
					if($total!=0)
					{
						$x=1;
						$query2="SELECT * FROM EXCLUSIVEBOOK where booktype='story' ";
                        $sdata=mysqli_query($conn,$query2);
						while($x<=10)
						{
							$result1=mysqli_fetch_assoc($sdata)
				?>
	       <div class="col-41">
				    <div class="fixedImage1">
                        <div class="product-name1">
						 <a  href="ParticularBookPage2.php?value=<?php echo $result1['bookname'];?>"> 
						
						<?php
						echo"
						 <img src= '".$result1['picsource']."'>
                            ";
							
						
					    ?>	
						
						</a>
                            <h3 class="book-title1"><?php echo substr($result1['bookname'],0,15); ?></h3>
                            <span class="author1"><?php echo substr($result1['authorname'],0,23); ?></span>
                            <div class="rating1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <p><span>&#8377;</span><?php echo $result1['sellprice']; ?></p>
                            
                        </div>
                </div>
			</div>
			<?php	
			$x++;
			 $count=1280;
			if($x%5==0)
			{
				$count=$count+780;
			}
		
			}
					}


          else{
               echo "no data";
		  }			  

		?>	
              
			
	 
    </div>	
 </div>
</div>
		



<br><br><br><br><br><br><br><br><br><br>
















<div class="cat">

<div class="a">


   <div class="comic"><figure><a href="home1.php"><img src="child2.jpg" style=" height:430px; width:290px;  "></a></figure></div>



</div>

<div class="b">
   
   <div class="c">
   
      <div class="e"><div class="art"><figure><a href="home1.php"><img src="rus1.png" style=" height:200px; width:500px;  "></a></figure></div> </div>
	  <div class="f"><div class="business"><figure><a href="home1.php"><img src="child11.jpg" style=" height:200px; width:365px;  "></a></figure></div></div>
   
   
   </div>
   
   
   <div class="d">
   
      
	  <div class="g"><div class="child"><figure><a href="home1.php"><img src="myth2.jpg" style=" height:205px; width:350px;  "></a></figure></div></div>
	  <div class="h"><div class="travel"><figure><a href="home1.php"><img src="hor1.jpg" style=" height:205px; width:515px;  "></a></figure></div></div>
   
   
   
   
   </div>
   
   
</div>

</div>




<div class="footer">
  <div class="main-foot">
     <div class="left-box">
	   <h2 style="Padding-left:20px; padding-top:20px; color:white;">About Us</h2>
	  
	   
	   <div class="content">
	     
		 <p style="font-family: 'Roboto Mono', monospace; line-height:30px; padding-top:30px;">Apna Market is a E-commerce website where you can buy and sell books . Here the students of 
		 JIS COLLEGE OF ENGINEERING can only sell books. Rather than selling anyone can buy any book from this website Except from the College book section .</p>
	     
		    <div class="social">
	 
	            <a href="#"><span class="fab fa-facebook-f" style="color:2f55a4;">&nbsp;&nbsp;&nbsp; </span></a>
	            <a href="#"><span class="fab fa-twitter" style="color:2f55a4;">&nbsp;&nbsp;&nbsp; </span></a>
				<a href="#"><span class="fab fa-instagram" style="color:#C13584;"> &nbsp;&nbsp;&nbsp;</span></a>
				<a href="#"><span class="fab fa-whatsapp" style="color:green;">&nbsp;&nbsp;&nbsp; </span></a>
	 
	        </div>
		 </div>
	 </div>
	 
	 
	 
	 <div class="center-box">
	 
	     <h2 style="Padding-left:60px; padding-top:20px; color:white;">Address</h2>
	        
			<div class="content">
			   
			   <div class="place">
			   <span class="fas fa-map-marker-alt" style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp; </span>
			   <span class="text"> Kalyani </span>
			   </div>
			   
			   <div class="place">
			   <span class="fas fa-phone-alt" style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp; </span>
			   <span class="text">+91-8250637800</span>
			   </div>
			   
			   <div class="place">
			   <span class="fas fa-envelope" style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;  </span>
			   <span class="text"> apnamarket2050@gmail.com</span>
			   </div>
			
			</div>
			
	 
	 </div>
	 
	 
	 
	 <div class="right-box">
	   <h2 style="Padding-left:90px; padding-top:20px; color:white;">Contact us</h2>
	 
	    <div class="content">
	       
		   <form action="#"> 
		   
	         <div class="email">
			   <div class="text" >Email</div>
			   <input type="email" required style="padding-top:10px;">
			 </div>
			 
			 <div class="msg">
			   <div class="mssage">Message</div>
			   <textarea rows="2" cols="25" required></textarea>
			 </div>
			 
			 <div class="button">
			  <button type="submit">Send</button>
			 </div>
			 
	       </form>
	 
	 
	 
	 
	 
	    </div>
	 </div>
	 
	 
	 
	 
	 
  </div>
   
   
</div>












</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

$('.sliders').slick({
  dots: true,
  infinite: true,
  speed: 1000,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  dots: false,
  autoplaySpeed: 4000,
  
    
});	





$('.slider').slick({
  dots: true,
  infinite: false,
  speed: 800,
  slidesToShow: 5,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});	




</script>

</body>
</html>