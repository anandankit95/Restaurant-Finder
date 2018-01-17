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
	<form action="restaurant_review_view.php" method="post">
	<select name="Review">
	<option value="Truffles">Truffles</option>
	<option value="Big Brewsky">Big Brewsky</option>
	<option value="Flechazo">Flechazo</option>
	<option value="Koramangala Social">Koramangala Social</option>
	<option value="Onesta">Onesta</option>
	<option value="Absolute Barbecues">Absolute Barbecues</option>
	<option value="Toit">Toit</option>
	<option value="Big Pitcher">Big Pitcher</option>
	<option value="Black Pearl">Black Pearl</option>
	<option value="Glen's Bakehouse">Glen's Bakehouse</option>
	<option value="High Ultra Lounge">High Ultra Lounge</option>
	<option value="Samarkand">Samarkand</option>
	<option value="Graze">Graze</option>
	<option value="By The Blue">By The Blue</option>
	<option value="Rajdhani Thali">Rajdhani Thali</option>
	</select><br><br>
	<input type="Submit" name="Submit"/>
	</form>-->
<form id="B" action="restaurant_review_view.php" method="post">
<div class="container">
<div id="C">
Know what people have to say about this restaurant
</div>
<table>
<tr class="row">
<td><select name="Review">
<option value="Truffles">Truffles</option>
	<option value="Big Brewsky">Big Brewsky</option>
	<option value="Flechazo">Flechazo</option>
	<option value="Koramangala Social">Koramangala Social</option>
	<option value="Onesta">Onesta</option>
	<option value="Absolute Barbecues">Absolute Barbecues</option>
	<option value="Toit">Toit</option>
	<option value="Big Pitcher">Big Pitcher</option>
	<option value="Black Pearl">Black Pearl</option>
	<option value="Glen's Bakehouse">Glen's Bakehouse</option>
	<option value="High Ultra Lounge">High Ultra Lounge</option>
	<option value="Samarkand">Samarkand</option>
	<option value="Graze">Graze</option>
	<option value="By The Blue">By The Blue</option>
	<option value="Rajdhani Thali">Rajdhani Thali</option>
</select>
</td>
</tr>
</table><br>
<input type="Submit" name="Submit" value="Search"/>
</div>
</form>
</body>
</html>
