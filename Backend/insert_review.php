<?php
$db_connection=pg_connect("host=localhost dbname=restaurant_finder user=postgres password=Mayank");
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="defaultStyle.css">
<style>
#B
{
padding-top:100px;
}
</style>
</head>
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
</div>
-->
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
<!--
<form action="input.php" method="post">
<label>Title:</label> <input type="text" name="Title"/><br><br>
<label>Content:</label> <input type="text" name="Content"/><br><br>
<label>Rating:</label> <input type="text" name="Rating"/><br><br>
<label>Restaurant:</label><input type="text" name="Restaurant"/><br><br>
<input type="submit" name="Submit"/><br><br>
</form>-->
<form id="B" action="input.php" method="post">
<div class="container">
<table>
<tr>
<td id="head">Title</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Title"></input></td>
</tr>
<tr>
<td id="head">Content</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Content"></input></td>
</tr>
<tr>
<td id="head">Rating</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Rating"></input></td>
</tr>
<tr>
<td id="head">Customer Id</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Customer_id"></input></td>
</tr>
<tr>
<td id="head">Restaurant</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Restaurant"></input></td>
</tr>
</table><br>
<input type="Submit" name="Submit" value="Submit"/>
</div>
</form>
</body>
</html>
