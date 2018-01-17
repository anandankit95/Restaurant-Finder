<html><head>
<link rel="stylesheet" type="text/css" href="defaultStyle.css">
<style>
#B
{
	padding-top:100px;
}
</style>
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
</div>
-->

<!--
	<form action="restaurant_finder.php" method="post">
	<select name="Location">
	<option value="Bangalore">Bangalore</option>
	<option value="Kolkata">Kolkata</option>
	</select><br><br>
	<select name="Street">
	<option value="MG Road">MG Road</option>
	<option value="100 Feet Road">100 Feet Road</option>
	<option value="Esplanade">Esplanade</option>
	<option value="Chandni Chowk">Chandni Chowk</option>
	<option value="Commercial Street">Commercial Street</option>
	<option value="Cubbon Road">Cubbon Road</option>
	<option value="Brigade Road">Brigade Road</option>
	<option value="80 Feet Road">80 Feet Road</option>
	<option value="Old Airport Road">OLd Airport Road</option>
	<option value="Outer Ring Road">Outer Ring Road</option>
	<option value="Mysore Road">Mysore Road</option>
	</select><br><br>
	<input type="Submit" name="Submit"/>
	</form>
	
-->


<form id="B" action="restaurant_finder.php" method="post">
<div class="container">
<div id="C">
Search by location
</div>
<table>
<tr class="row">
<td id="head">City</td>
<td><select name="Location">
<option value="Bangalore">Bangalore</option>
	<option value="Kolkata">Kolkata</option>
	</select>
</td>

</tr>
<tr class="row">
<td id="head">Street</td>
<td><select name="Street">
<option value="MG Road">MG Road</option>
	<option value="100 Feet Road">100 Feet Road</option>
	<option value="Esplanade">Esplanade</option>
	<option value="Chandni Chowk">Chandni Chowk</option>
	<option value="Commercial Street">Commercial Street</option>
	<option value="Cubbon Road">Cubbon Road</option>
	<option value="Brigade Road">Brigade Road</option>
	<option value="80 Feet Road">80 Feet Road</option>
	<option value="Old Airport Road">Old Airport Road</option>
	<option value="Outer Ring Road">Outer Ring Road</option>
	<option value="Mysore Road">Mysore Road</option>
	</select>
</td>
</tr>
</table><br>
<input type="Submit" name="Submit" value="Search"/>
</div>
</form>

</body>
</html>
