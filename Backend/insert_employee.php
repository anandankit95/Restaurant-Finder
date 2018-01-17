<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="defaultStyle.css">
</head>
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


<form id="B" action="insert_employee_final.php" method="post">
<div class="container">
<div id="C">
Employee Details
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
<td id="head">Zip</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Zip"></input></td>
</tr>
<tr>
<td id="head">Date of join</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Dateofjoin"></input></td>
</tr>
<tr>
<td id="head">Role</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Role"></input></td>
</tr>
<tr>
<td id="head">Restaurant</td>
<td><input id="form" type="text" style="margin:10px;border:none" name="Restaurant"></input></td>
</tr>
</table><br>
<input type="Submit" name="Submit"/>
</div>
</form>



<!--
	<form action="insert_employee_final.php" method="post">
	<label>Name:</label><input type="text" name="Name"/>
	
	<label>Street</label><input type="text" name="Street"/>
	<label>State</label><input type="text" name="State"/>
	
	<label>Zip</label><input type="text" name="Zip"/>
	<label>Date of join:</label><input type="text" name="Dateofjoin"/>  
	<label>Role:</label><input type="text" name="Role"/>
	<label>Restaurant</label><input type="text" name="Restaurant"/>
	
	<input type="Submit" name="Submit"/>
	</form>-->
</body>
</html>
