<?php
$db_connection=pg_connect("host=localhost dbname=restaurant_finder user=postgres password=Mayank");
session_start();
$cuisine=$_POST['Cuisine'];
$result=pg_query($db_connection,"select distinct restaurant.name from restaurant,restaurant_cuisine where restaurant.r_id=restaurant_cuisine.r_id and restaurant_cuisine.cuisine='$cuisine'");

?>
<head>
<link rel="stylesheet" type="text/css" href="defaultStyle.css">
</head>
<style>
.co
{
	text-align:center;
}
.box
{
	display:inline-block;
	margin:40px;
	padding:20px;
	border:none;
	background-color:white;
	width:50%;
	opacity:0.8;
	font-size:35px;
}
.co :nth-child(1)
{
margin-top:100px;
}
</style>
<body>
<!--
<div class="topnav">
  <a class="active" href="front_end.php">Home</a>
  <a href="insert_customer.php">Customer</a>
   <a href="insert_employee.php">Employee</a>
  <a href="insert_review.php">Review</a>
   <a href="home.php">Location</a>
  <a href="type.php">Type</a>
  <a href="cuisine.php">Cuisine</a>
</div>

<div style="padding-left:16px">
  <h2></h2>
  <p></p>
</div>-->
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
echo "<div class=\"co\">";
while ($row = pg_fetch_row($result)) 
{
echo "<div class=\"box\">$row[0]</div>";
}
echo "</div>";
?>
</body>
</html>
