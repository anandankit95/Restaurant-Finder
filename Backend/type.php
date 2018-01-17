<html>
<head>
<link rel="stylesheet" type="text/css" href="defaultStyle.css">
<style>
	#B
		{
			margin-top:200px;
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
	<form action="restaurant_type_back.php" method="post">
	<select name="Type">
	<option value="Casual Dining">Casual Dining</option>
	<option value="Bar">Bar</option>
	<option value="Cocktail Bar">Cocktail Bar</option>
	<option value="Bakery">Bakery</option>
	<option value="Lounge">Lounge</option>
	<option value="Pub">Pub</option>
	<option value="Cafe">Cafe</option>
	<option value="Microbrewery">Microbrewery</option>
	</select><br><br>
	<input type="Submit" name="Submit"/>
	</form>-->
<form id="B" action="restaurant_type_back.php" method="post">
<div class="container">
<div id="C">
Search by restaurant type
</div>
<table>
<tr class="row">
<td><select name="Type">
<option value="Casual Dining">Casual Dining</option>
	<option value="Bar">Bar</option>
	<option value="Cocktail Bar">Cocktail Bar</option>
	<option value="Bakery">Bakery</option>
	<option value="Lounge">Lounge</option>
	<option value="Pub">Pub</option>
	<option value="Cafe">Cafe</option>
	<option value="Microbrewery">Microbrewery</option>
</select>
</td>
</tr>
</table><br>
<input type="Submit" name="Submit" value="Search"/>
</div>
</form>
</body>
</html>
