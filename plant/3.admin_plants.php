<!--form-->
<html>
<head>
		<link href="admin.css" rel="stylesheet" type="text/css">
	</head>
	
<body>
<div class="container">
        <div class= "sidebar">
		   
			<a href="1.admin_dashboard.php"><h1>#Admin</h1></a>
			<div class="admin_profile">
				<img src="images1/badhon.jpg"/>
				<h3>Afrina Rashid</h3>
				<p>Admin</p>
			</div>
			<ul>
	    	<li><a href="1.admin_dashboard.php">Dashboard</a></li>
			<li><a href="2.admin_category.php">Category</a></li>
			<li><a href="3.admin_plants.php">Plants</a></li>
			<li><a href="">Feedback</a></li>
			<li><a href="">Plant's Care</a></li>
			<li><a href="">FAQ</a></li>
			<li><a href="">About Us</a></li>
			</ul>
    	</div>

		<div class="category">
		<table>
			<form action="plants_process.php" method="POST" enctype="multipart/form-data" >
			
			<tr>
				<td style="color:black; font-size:20px;"> Category Name </td>
				<td><input class="l" type="text" name="c_name" placeholder="Enter Your Category name" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Category Id </td>
				<td><input class="l" type="text" name="c_id" placeholder="Enter Your Category id" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Plant Name </td>
				<td><input class="l" type="text" name="plants_name" placeholder="Enter Your Plant name" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Price </td>
				<td><input class="l" type="text" name="plants_price" placeholder="Enter price" size="50" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Picture </td>
				<td><input class="l" type="file" name="image" size="50" placeholder="Enter Your Picture" ></td>
			</tr>
			<tr>
				<td style="color:black; font-size:20px;"> Plants Details </td>
				<td><input class="l" type="text" name="plants_details" size="50" placeholder="Enter Your Plants Details" ></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" value="submit"/></td>
			</tr>
			</form>
		</table>	
        
		


	
	<!--data show-->
	<?php
	$connect=mysqli_connect('localhost','root','','plant');
	$query="SELECT * FROM plants ORDER BY plants_id DESC";
	$result=mysqli_query($connect,$query);
	?>

		<table align="center" border="1px solid black;" style="width:1100px; line-height:60px;">
		<tr>
		<th colspan="6"><h1 style="font-family:tahoma; color:black;"><u>Plants</u></h1></th>
		</tr>
		
		<tr>
		<th style="color:black;">Category Name</th>
		<th style="color:black;">Plant Name</th>
		<th style="color:black;">Price</th>
		<th style="color:black;">Plant Image</th>
		<th colspan="2" style="color:black;">Action</th>
		</tr>
		<?php
		
			while($rows=mysqli_fetch_array($result))
			{
			$image= $rows['plants_image']; 
		?>
	<tr>
	    

		<td align="center" style="color:black;"><?php echo $rows['c_name'];?></td>
		<td align="center" style="color:black;"><?php echo $rows['plants_name'];?></td>
		<td align="center" style="color:black;"><?php echo $rows['plants_price'];?></td>
		<td align="center" style="color:black;"><?php echo "<img src='images/$image' class='img'>";?></td>
		
	</tr>
	<?php
		}
	?>
			</table>
	</div>
</div>	
</body>
</html>
