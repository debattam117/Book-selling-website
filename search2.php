<?php
include("connection.php");
session_start();









$sess=$_SESSION['user'];
if($sess==true)
{
$query="SELECT * FROM EXCLUSIVEBOOK ";
$data=mysqli_query($conn,$query);

$total=mysqli_fetch_row($data);
}
else
{
	header('location:login.php');
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
	height:<?php echo $count; ?> px;
   
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









   /*------------------------ book-----------------------------*/
  
 


.story-book
{
	padding-right:50px;
	 width:1500px;
	height:<?php echo $count; ?> px;
   
    padding-top:10px;
    
	 background:none;

 }



.story
{
	margin-top:00px;
	height:<?php echo $count; ?> px;
	
	

}

.story-book .row{
	
	padding-left:150px;
	margin-left:8px;
	margin-right:93px;
	padding-top:28px;
	padding-bottom:85px;
}


.row{
	display:flex;
	flex-wrap: wrap;
	padding-bottom:30px;
   padding-right:-10px;
  
}

.row .col-4{
	
	
	flex-basis:20%;
	
	
}


.col-4 img
{
	
	width:170px;
   height:250px;
   margin-top:30px;
   padding-left:20px;
   
  
  
	
}

.col-4 .book-title {
	font-family: 'Roboto Mono', monospace;
	font-size:20px;
	padding-left:20px;
	padding-top:10px;
}
.col-4 .author{
	font-family: 'Roboto Mono', monospace;
	font-size:13px;
	padding-left:20px;
	color:blue;
	
	
}



.col-4 .rating{
	padding-top:15px;
	margin-left:20px;
	font-size:15px;
	color:#FFD700;
}


.col-4 p
{
	padding-left:20px;
	font-size:20px;
    color:red;
	font-family: 'Roboto Mono', monospace;
}


.fixedImage
{
	padding-left:
	text-align:left;
}


.story-book .row{   /*throw this code we can change the padding-top of the books first row and bottom of the book list*/
	
	padding-left:150px;
	margin-left:-12px;
	margin-right:55px;
	padding-top:28px;
	padding-bottom:85px;
}


.product-name
{
	cursor:pointer;
    transition:transform 0.5s;
}


.product-name:hover{
  transform:translateY(-10px);
}


p2                          /*through this code we can change the shape size color of book type name that is tory book*/
{
	
   font-family:Impact, fantasy;
	font-size:80px;
	margin-left:545px;
	padding-top:40px;
	color:#4B0082;
}
.col-2                       /*through this code we can only change the padding of the heading of books from top and bottom*/
{
	padding-top:53px;
}

p3                         /*through this code we can change the shape size color of book type name that is tory book*/
{
	
   font-family:Impact, fantasy;
	font-size:80px;
	margin-left:700px;
	padding-top:40px;  
	color:#4B0082;
}



.search-bar
{
  flex-basis: 30%;
  display:flex;
  justify-content:  space-between;
  margin-left: 60px;
  margin-bottom: 20px;
  margin-top: 10px;
}



.loc-4
{
 margin-left:147px;
  flex-basis: 30%;
  padding-top:20px;
  
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

.divide
{
	display:flex;
	
}

.col-2
{
	flex-basis:50%;
}

.search-bar
{
  flex-basis:50%;	
}



.col-2 p3
{
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	font-size:43px;
	
	margin-left:157px;
	
	color:black;
	
	
}
















</style>


</head>
<body background="bookback7.jpg">














  










<div class ="whole">



<div class="content">




<div class="nav">
         
    <ul>

     <li> <a class="active" href="home2.php">Home</a>
      
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








<div class="story-book">
 <div class="story"> 
   
<?php 
	   
	  if(isset($_POST['sub']))
	    {
?>
					   
					    <div class="divide">
			 
				
							<div class="col-2">
								<p3>YOUR &nbsp;&nbsp; SEARCH &nbsp;&nbsp;RESULT</p3>
								
							</div>
							
				
							<div class="search-bar">
								<form action="search2.php" method="POST" id="frm">
								<div class="loc-4" ><div class="emni"><button  type="submit" name="sub" style=" outline: none  ;  border: none; background-color: green; height:42px; width:40px; border-top-left-radius:10px; border-bottom-left-radius:10px;"><i class="fa fa-search" style="margin-top: 1px; margin-left: 3px; font-size: 20px; color: white;"></i></button></div></div>
								<div class="loc-5"><input type="text" class="but" name="box"  placeholder="Search.." style="height:41.99px; margin-left: 321px; margin-top: -40.9px; outline: none; font-size: 20px; padding-left: 20px; background-color: 	#DCDCDC; border-top-right-radius:10px; border-bottom-right-radius:10px;" ></div>
								<form>
							</div>
			 
						</div>	
					   

                       <div class="row">

<?php
				     	$x=1;
		                $sea=$_POST['box'];
						$sea=str_replace("'","\'",$sea);
					    ##$sea=str_replace("#[^0-9a-Z]#i","",$sea);
					    $query3="SELECT * FROM EXCLUSIVEBOOK where bookname LIKE'%$sea%' OR booktype LIKE'%$sea%' OR authorname LIKE'%$sea%'OR language LIKE'%$sea%' OR bookcategory LIKE '%$sea%'" ;
					    $count1=mysqli_query($conn,$query3);
			            while($result2=mysqli_fetch_assoc($count1))
				        {
							
?>
	                             <div class="col-4" ">
				                 <div class="fixedImage">
                                 <div class="product-name">
						         <a  href="ParticularBookPage2.php?value=<?php echo $result2['bookname'];?>"> 
						
<?php
						     echo" <img src= '".$result2['picsource']."'>  ";
?>	
						
						         </a>
                                 <h3 class="book-title"><?php echo substr($result2['bookname'],0,15); ?></h3>
                                 <span class="author"><?php echo substr($result2['authorname'],0,23); ?></span>
                                 <div class="rating">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star-half-o"></i>
                                 </div>
                                <p><span>&#8377;</span><?php echo $result2['sellprice']; ?></p>
                              </div>
                             </div>
			                </div>
						
<?php	
			        $x++;
			        $count=1780;
			        if($x%5==0)
			        {
				        $count=$count+780;
			        }
		    
			            }
			
		}
	   
	     
	else if($total!=0)
	{
						
						
						
?> 
             <div class="divide">
			 
				
							<div class="col-2">
								<p3>ALL&nbsp;&nbsp;&nbsp;BOOKS</p3>
							</div>
							
				
							<div class="search-bar">
								<form action="search2.php" method="POST" id="frm">
								<div class="loc-4" ><div class="emni"><button  type="submit" name="sub" style=" outline: none  ;  border: none; background-color: green; height:42px; width:40px; border-top-left-radius:10px; border-bottom-left-radius:10px;"><i class="fa fa-search" style="margin-top: 1px; margin-left: 3px; font-size: 20px; color: white;"></i></button></div></div>
								<div class="loc-5"><input type="text" class="but" name="box"  placeholder="Search.." style="height:41.99px; margin-left: 321px; margin-top: -40.9px; outline: none; font-size: 20px; padding-left: 20px; background-color: 	#DCDCDC; border-top-right-radius:10px; border-bottom-right-radius:10px;" ></div>
								<form>
							</div>
			 
			</div>	
			
                <div class="row">
<?php
						$x=1;
						$query2="SELECT * FROM EXCLUSIVEBOOK";
                        $sdata=mysqli_query($conn,$query2);
						while($result1=mysqli_fetch_assoc($sdata))
						{
							
?>
	              <div class="col-4" id="<?php echo $result['bookname'];?>">
				      <div class="fixedImage">
                        <div class="product-name">
						    <a  href="ParticularBookPage2.php?value=<?php echo $result1['bookname'];?>"> 
						
<?php
						echo"
						 <img src= '".$result1['picsource']."'>
                            ";
							
?>	
						
						</a>
                            <h3 class="book-title"><?php echo substr($result1['bookname'],0,16); ?></h3>
                            <span class="author"><?php echo substr($result1['authorname'],0,23); ?></span>
                            <div class="rating">
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
			 $count=1780;
			if($x%5==0)
			{
				$count=$count+780;
			}
		   
			}
	
	}
?>	
              
			
	 
    </div>	
  </div>
</div>









  
  
  
  
  
  
  
</div>



</div>


<script>




</script>





<script>

if(window.history.replaceState){
	window.history.replaceState(null,null,window.location.href)
}



</script>

</body>
</html>