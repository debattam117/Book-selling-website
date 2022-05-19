<?php
include("connection.php");
session_start();

$query="SELECT * FROM EXCLUSIVEBOOK ";
$data=mysqli_query($conn,$query);

$total=mysqli_fetch_row($data);

$sesse=$_GET['value'];
$sesse=str_replace("'","\'",$sesse);

$nato=$sesse;


?>


<?php


$sess=$_SESSION['user'];
if($sess==true)
{
$query2="select * from user where email='$sess'";
$data=mysqli_query($conn,$query2);
$result=mysqli_fetch_assoc($data);
}
else
{
	header('location:login.php');
}



$u=$result['user_name'];
?>


<?php

if(isset($_POST['submit1']))
{
	$com = $_POST['commen'];
	$com=str_replace("'","\'",$com);##Because apostrophes values are not accepted by php when we are inserting text
	$uname=$result['user_name'];
	$bname=$sesse;
	
	if($com!="")
		{
			
			if($sess==true)
			{
				
	
	$query1="INSERT INTO COMMENTS VALUES('','$uname','$com','$bname')";
	
	$data=mysqli_query($conn,$query1);
	
	
	            if($data)
	             {
		         //echo "data in";
	             }
			}
			else
			{
				//echo"Please match your passwor.";
				
			}
			
			
		
}
	else
	{
		#echo"not in failed".mysqli_connect_error();
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

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

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




.product
{
  background-size: 46200px 4400px;
	background-repeat: no-repeat;
	/* background-image:url(bookback8.jpg);*/
	 
	 width:1500px;
	height:650px;
	padding-right:-32px;
	margin-left:45px;
	 /*box-shadow:0 0 20px 0 rgba(0,0,0,0.5);*/
    /*cursor:pointer;*/
	border-radius:20px;
	font-size:10px;
}


.product
{
	display:flex;
}


.any
{
	margin-top:87px;
	border:2px solid black;
	width:400px;
	height:460px;

}












.content{
	margin:auto;
	 width:1600px;
	height:1250px;
   
    padding-top:23px;
    
	 background:none;
	
}

.row
{
	display:flex;
	height:600px;
	width:1000px;
	
}


.row .col-2
{
	flex: 20%;
	margin-bottom:10px;
	font-size:40px;
	font-family: 'Roboto Mono', monospace;
	color:#505050;
	width:50px;
	
}

.row .col-3
{
	flex: 50%;
	margin-bottom:10px;
	font-size:50px;
	font-family: 'Roboto Mono', monospace;
	color:#505050;
	width:20px;
	padding-top:30px;
	
}

.col-2 img
{
	
	width:250px;
   height:390px;
   margin-top:87px;
   padding-left:34px;
   
  
	
}















.col-3 .book-title {
	font-family: 'Roboto Mono', monospace;
	font-size:40px;
	margin-top:47px;
	
} 







.col-3 .author{
	
	font-family: 'Roboto Mono', monospace;
	font-size:27px;
	
	color:blue;
	padding-top:10px;
	
	
	
}



.col-3 .rating{
	
	color:#FFD700;
	padding-top:8px;
	color:#FFD700;
	font-size:22px;
}


.col-3 p
{
	
	font-size:19px;
    color:red;
	font-family: 'Roboto Mono', monospace;
}

.info
{
	height:200px;
	width:700
	margin-top:20px;
	padding-top:20px;
}


.adjust
{
	display:flex;
	width:200px;
	height:100px;
	margin-left:33px;
}


.buy
{
	
	flex:50%;
    color:black;
	font-family: 'Roboto Mono', monospace;
	font-size:17px;
	padding-left:60px;
}

.buy{
	margin-top:20px;
}

.buy a{
	text-decoration:none;
}

.btn{
   display:inline-block;
   background: #ff0000;
   color:#fff;
   padding:8px 25px;
   
   border-radius:30px;
   transition:background 0.5s;
   width:53px;
   text-align:center;
  
}

.btn:hover{
    background:#4B0082;;
}



.price{
	
	flex:50%;
	margin-top:15px;
	font-size:35px;
	  color:red;
	  margin-left:3px;
	  padding-left:0px;
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















/*-------------------------exclusive  book-----------------------------*/
.storys
{
	 background-size: 76200px 7400px;
	background-repeat: no-repeat;
	/* background-image:url(bookback8.jpg);*/
	 
	 width:1170px;
	height:410px;
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
	
	width:150px;
   height:210px;
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
	font-size:16px;
	
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
	margin-left:383px;
	width:1180px;
	height:400px;
    margin-top:-70px;
    padding-top:0px;
   
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


/* .slider .slick-prev
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

*/

.slider{
margin-left:99px;	
height:430px;

}



.story a{
  text-decoration:none;
  color:white;
  font-family: 'Roboto Mono', monospace;
}







.comment
{
	width:930px;
	border:2px solid black;
	padding:15px  10px;
	margin-left:485px;
	margin-top:10px;
}


.comment h2
{
   text-align:center;
   margin-bottom:15px;
   font-family: 'Montserrat', sans-serif;
   text-transform:uppercase;
   word-spacing: 5px;
}

.comment textarea
{
	width:100%;
	height:28px;
	margin-bottom:15px;
	margin-top:30px;
	border:none;
	border-bottom:2px solid #aaa;
	outline:none;
	background-color:transparent;
	resize:none;
	font-size:20px;
}



.comment  input[type="submit"] , button
{
	padding:10px 15px;
	border:none;
	outline:none;
	border-radius:5px;
	text-transform:uppercase;
	font-weight:bold;
	cursor:pointer;
}


.comment  input[type="submit"]
{
	color:white;
	background-color:green;
	
	
}

.comment button
{
	color:black;
	background-color:transparent;
}



.btnn
{
	display:none;
}




.col-15
{
  margin-right:10px;
 
}



.commentshow
{
  */border:2px solid black;
  width:1000px;
  margin-top:40px;
  height:<?php echo $count; ?>px;
  margin-left:485px;
   display: flex;
  flex-wrap: wrap;
	
}


.commentss
{
  
  border:2px solid black;
  width:950px;
  margin-top:10px;
  height:150px;
  margin-left:0px;
  
}



.commentss h3
{
	font-family: 'Roboto Mono', monospace;
	margin-left:10px;
	margin-top:10px;
}


.commentss p6
{
	margin-top:20px;
	font-family: 'Montserrat', sans-serif;
	
}



.answer
{
	margin-left:30px;
	margin-top:10px;
}


.commentsss
{
  
  border:2px solid black;
  width:950px;
  margin-top:10px;
  height:50px;
  margin-left:0px;
  font-family: 'Roboto Mono', monospace;
  
}





.switch  input[type="submit"]
{
	color:white;
	background-color:green;
	padding:10px 15px;
	border:none;
	outline:none;
	border-radius:5px;
	text-transform:uppercase;
	font-weight:bold;
	cursor:pointer;
	
	
}



.switch
{
	margin-top:30px;
	margin-left:840px;
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













  <div class="Product">
  
    <div class="any">
	  
	   <div class="col-15">
            <form action="search2.php" method="POST" id="frm">
             <div class="loc-4" ><div class="emni"><button  type="submit" name="sub" style=" outline: none  ; margin-left:60px; border: none; margin-top:20px; background-color: green; height:42px; width:40px; border-top-left-radius:10px; border-bottom-left-radius:10px;"><i class="fa fa-search" style="margin-top: 1px; margin-left: -3px; font-size: 20px; color: white;"></i></button></div></div>
             <div class="loc-5"><input type="text" class="but" name="box"  placeholder="Search.." style="margin-left: 102px; margin-top:-41px; outline: none; font-size: 25px; padding-left: 20px; background-color: 	#DCDCDC; border-top-right-radius:10px; border-bottom-right-radius:10px; width:240px; height:40px;" ></div>
             </form>
          </div>
    </div>
  
  
  
  
    <div class="row" >
	
	 <?php 
					if($total!=0)
					{
						
						$query1="SELECT * FROM EXCLUSIVEBOOK where bookname='$sesse' ";
                        $edata=mysqli_query($conn,$query1);
						$result=mysqli_fetch_assoc($edata);
						$result2=$result['booktype'];
						
						
				?>
				
     <div class="col-2">
	   	            <a>  <?php
					    
						echo"
						 <img src= '".$result['picsource']."'>
                            ";
							
						
					    ?>	
					   </a>
					   <div class="adjust">
					    <div class="price"><p1><span>&#8377;</span><?php echo $result['sellprice']; ?></p1></div>
					<div class="buy">
					<a href=""class="btn">BUY</a>
		             
		</div>
		
		 </div>
	  </div>
	 
	 
	 <div class="col-3">
	  <div class="book-title"><p3><?php echo ($result['bookname']); ?></p3></div>
	                       <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="author"><span><?php echo($result['authorname']); ?></span></div>
							<div class="info">
							<p> <?php echo($result['bookdescription']); ?></p>
							</div>
							
                            
         
	   </div>
	  
	  	<?php	
			
			}
					


          else{
               echo "no data";
		  }			  

		?>	
	  
	  
	  
    </div>
  </div>
  
  
  
  
  
  
  
 <div class="storys-books">
  <div class="storys">
  
                
		
  
  
				
            <div class="row slider">
			
			 <?php 
					if($total!=0)
					{
						
						$query1="SELECT * FROM EXCLUSIVEBOOK where booktype='$result2' ";
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


<div class="comment">

           <h2> REVIEW <?php echo"$sesse";  ?> </h2>
		    <form id="comments" action="" method="POST" >
				  <textarea rows="5"  name="commen" placeholder="WRITE HERE" maxlength="400" ></textarea>
				       <div class="btnn">
				         
						  <input type="submit" name="submit1" value='Submit'>
						  <button class="bn" name="sub" id='clear'> Cancel </button>
				       </div>
			</form>


</div>
  
  
  
  
  
<div class="commentshow">
   
   <?php  
            $count=0;
			$y=1;
			$query11="select * from comments where book_name='$sesse' ORDER BY id DESC ";
			$data11=mysqli_query($conn,$query11);
			$total=mysqli_num_rows($data11);



         if($total==0)
		 {
     ?>
         
		 <div class="commentsss">
         <h3 style="text-align:center;font-size:30px;">NO REVIEW<h3>




		 </div>
		 
		 
		 
		 
<?php
  
         }


         else{



 
          while($y<=$total)
		  {
			  $result11=mysqli_fetch_assoc($data11);
   ?>
   
    <div class="commentss">
       <h3><span class="fas fa-user" style="color:black;">&nbsp;&nbsp;  </span><?php echo $result11['user_name'];   ?><h3>
      <div class="answer"> <p6><?php echo $result11['comment'];   ?></p6></div>
	  
        
		
    </div>

<?php

             $y++;
			 
			 $count=$count+150;
			 
			 if($y==6)
			 {
				 break;
			 }
          }


		 }


?>








</div>
  
<br><br><br>
  
  
  
</div>



</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

$('.slider').slick({
  dots: false,
  infinite: false,
  speed: 600,
  slidesToShow: 5,
  slidesToScroll: 5,
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






var feild = document.querySelector('textarea');
var backUp = feild.getAttribute('placeholder');
var btn = document.querySelector('.btnn');
var clear = document.getElementById('clear')

feild.onfocus = function(){
    this.setAttribute('placeholder', '');
    this.style.borderColor = '#333';
    btn.style.display = 'block'
}

feild.onblur = function(){
    this.setAttribute('placeholder',backUp);
    this.style.borderColor = '#aaa'
}

clear.onclick = function(){
    btn.style.display = 'none';
    feild.value = '';
}










</script>



<script>

if(window.history.replaceState){
	window.history.replaceState(null,null,window.location.href)
}



</script>

</body>
</html>