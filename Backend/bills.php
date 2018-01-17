
<html>
<head>
<link rel="stylesheet" type="text/css" href="defaultStyle.css">
<style>
.price
		{
			display:inline-block;
			margin:20px;
			padding:20px;
			font-size:25px;
			border:none;
			background-color:gray;
		}
.container
{
margin-top:75px;
}
</style>
<body>
<div class="topBar">
<div class="anchorContainer">
<a href="homepage.php">Home</a>
<div id="A"></div>
</div><div class="anchorContainer">
<a href="insert_customer_EDITED_2.php">Customer</a>
<div id="A"></div>
</div><div class="anchorContainer">
<a href="insert_employee.php">Employee</a>
<div id="A"></div>
</div><div class="anchorContainer">
<a href="insert_review.php">Review</a>
<div id="A"></div>
</div><div class="anchorContainer">
<a href="home.php">Location</a>
<div id="A"></div>
</div><div class="anchorContainer">
<a href="type.php">Type</a>
<div id="A"></div>
</div><div class="anchorContainer">
<a href="cuisine.php">Cuisine</a>
<div id="A"></div>
</div><div class="anchorContainer">
<a href="orders.php">Orders</a>
<div id="A"></div>
</div><div class="anchorContainer">
<a href="review_cust.php">Customer Reviews</a>
<div id="A"></div>
</div><div class="anchorContainer">
<a href="contact.php">About</a>
<div id="A"></div>
</div>
</div>
<?php
$db_connection=pg_connect("host=localhost dbname=restaurant_finder user=postgres password=Mayank");
session_start();
$restaurant=$_POST['fina'];
$final=$_POST['fin'];
$final_array=explode(',',$final);

$items=pg_query($db_connection,"Select * from menu,restaurant where restaurant.name='$restaurant' and restaurant.r_id=menu.r_id");
$price=[];

$i=1;
$total=0;
echo "<div class=\"container\">";
while($row=pg_fetch_row($items))
{
	
	
	$b=$row[2] * $final_array[$i];
	
	array_push($price,$b);
	
	echo "<div class=\"price\">".$row[1]." ".$final_array[$i]." ".$b."</div>";
	echo "<br>";
	$i++;
	$total+=$b;
	
}
echo "<div class=\"price\">"."Total:".$total."</div>";
echo "</div>";
?>
</body>
</head>
</html>
