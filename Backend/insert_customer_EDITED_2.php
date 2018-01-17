<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="defaultStyle.css">
</head>
<body>
<!-- From here copy into all front end files -->
<!--
<div class="topnav">
  <a class="active" href="front_end.php">Home</a>
  <a href="insert_customer.php">Customer</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
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
<!-- original Code
<div class="inputBoxContainer">
<div class="inputBox">
	<form action="insert_customer_final.php" method="post">
	<label>Name</label><input type="text" name="Name"/>
<br><br>
	<label>Street</label><input type="text" name="Street"/><br><br>
	<label>State</label><input type="text" name="State"/><br><br>
	
	<label>Phone</label><input type="text" name="Phone"/> <br><br>
	<label>Zip</label><input type="text" name="Zip"/><br><br>
	 
	
	<label>Restaurant</label><input type="text" name="Restaurant"/><br><br>
	
	<input type="Submit" name="Submit"/>
	</form>
</div>
</div>
-->


<!-- Taken from sample3.html -->

<form id="B" action="insert_customer_final.php" method="post">
<div class="container">
<div id="C">
Enter your details
</div>
<table>
<tr>
<td id="head">Name</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Name"></input></td>
</tr>
<tr>
<td id="head">Street</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Street"></input></td>
</tr>
<tr>
<td id="head">State</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="State"></input></td>
</tr>
<tr>
<td id="head">Phone</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Phone"></input></td>
</tr>
<tr>
<td id="head">Zip</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Zip"></input></td>
</tr>
<tr>
<td id="head">Restaurant</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Restaurant"></input></td>
</tr>
</table><br>
<input type="Submit" name="Submit" value="Add"/>
</div>
</form>
<!-- Taken from sample3.html -->

</body>
</html>
