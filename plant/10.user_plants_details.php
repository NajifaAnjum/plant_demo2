<!--form-->
<html>
<head>
		<link rel="stylesheet" href="cat.css">
	<link href="page1.css" rel="stylesheet"/>
	</head>
	
<body>
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
<div class="middle1">

<?php
$connect=mysqli_connect('localhost','root','','plant');

if(isset($_REQUEST["p_id"])){
	
	$p_id = $_REQUEST["p_id"];


$query="SELECT * FROM plants WHERE plants_id=$p_id";
$result=mysqli_query($connect,$query);

		
			while($rows=mysqli_fetch_array($result))
			{
				 $image= $rows['plants_image'];
			
		?>
	   
	   <table>
			<div class="box1">
			    <div class="box1-name"><?php echo $rows['plants_name'];?></div>
				<div class="box1-price"><?php echo $rows['plants_price'];?></div>
				<div class="box1-details"><?php echo $rows['plants_details'];?></div>
				<div class="box1-img"><?php echo "<img src='images/$image' class='img'>";?></div>
				
			</div>
			
			</form>
		</table>
<?php
}}
	?>		
	</div>
</div>		
</body>
</html>	



