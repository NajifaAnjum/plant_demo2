<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="cat.css" class="text/css">
	<link href="page1.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">

        <div class="header">
   <div class="main_menu">
     <ul>
		<li><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Login</a></li>
		<!--<li><a href=""><i class="fas fa-user"></i>&nbsp;&nbsp;Customer login</a></li>
		<li><a href=""><i class="far fa-address-book"></i>&nbsp;&nbsp;Not a member?Register</a></li>-->
		<li><a href="">Call us now +880-01700-540523</a></li>
	 </ul>
	</div> 
	<div class="main_menu2">
	 <ul>
		<li><a href=""><i class="fab fa-facebook"></i></a></li>
		<li><a href=""><i class="fab fa-twitter"></i></a></li>
		<li><a href=""><i class="fab fa-tumblr"></i></i></a></li>
		<li><a href=""><i class="fab fa-pinterest"></i></a></li>
	 </ul>
	</div> 
</div>
<div class="header2">
   <div class="header2_left"><h1 style="font-family:tahoma; float:left; width:40%; padding-top:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLANT HOUSE</h1></div>
   <div class="header2_right">
   <ul>
		<li><a href="7.user_page1.html">HOME</a></li>
		<li><a href="8.user_categories.php">CATEGORIES</a></li>
		<li><a href="">ABOUT US</a></li>
		<li><a href="">ORDER NOW</a></li>
		<li><a href="">REVIEWS</a></li>
		<!--<li><a href="">BLOG</a></li>-->
		<li><a href=""><i class="fas fa-search"></i></a></li>
	 </ul>
   </div>
</div>
        
		<?php
		$connect=mysqli_connect('localhost','root','','plant');
		$query="SELECT * FROM category ORDER BY c_id DESC";
		$result=mysqli_query($connect,$query);
	    ?>

        <div class="middle1">
		
            <?php
		
			while($rows=mysqli_fetch_array($result))
			{
			$image= $rows['c_pic']; 
		?>
	<table>
	<div class="box1">
		<div class="box1-img"><a href="9.user_plants.php?c_id=<?php echo $rows['c_id'];?>"><?php echo "<img src='images/$image' class='img'>";?></a></div>
		<div class="box1-name"><a href="9.user_plants.php?c_id=<?php echo $rows['c_id'];?>"><?php echo $rows['c_name'];?></a></div>
	</div>
	<?php
		}
	?>
	</table>
        </div>

        <div class="footer">
            <div class="left">
                <h1>About us</h1>
                <p>We are a team of 40 experts with over 12 years of experience in marketing to help businesses grow online.Our mission is to empower our clients to use our website to buy plants to its full potential by providing affordable, effective and marketing solutions.</p>
                <div class="icon">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-tumblr"></i></i></a>
                    <a href=""><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="right">
                <img src="images/care1.jpg"/>
                <h1>Plant House</h1>
            </div>
        </div>

    </div>
</body>
</html>