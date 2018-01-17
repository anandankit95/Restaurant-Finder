<html>
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
	<form action="restaurant_cuisine_back.php" method="post">
	<select name="Cuisine">
	<option value="European">European</option>
	<option value="American">American</option>
	<option value="italian">italian</option>
	<option value="Continental">Continental</option>
	<option value="Rajasthani">Rajasthani</option>
	<option value="North Indian">North Indian</option>
	<option value="Pizza">Pizza</option>
	<option value="Afghan">Afghan</option>
	<option value="Thai">Thai</option>
	<option value="Mongolian">Mongolian</option>
	<option value="South Indian">South Indian</option>
	<option value="Bakery">Bakery</option>
	<option value="Cafe">Cafe</option>
	<option value="Pan Asian">Pan Asian</option>
	<option value="Asian">Asian</option>
	<option value="Mediterranean">Mediterranean</option>
	<option value="Desserts">Desserts</option>
	</select><br><br>
	<input type="Submit" name="Submit"/>
	</form>
-->
<form id="B" action="restaurant_cuisine_back.php" method="post">
<div class="container">
<div id="C">
Search by cuisine
</div>
<table>
<tr class="row">
<td><select name="Cuisine">
<option value="European">European</option>
	<option value="American">American</option>
	<option value="italian">italian</option>
	<option value="Continental">Continental</option>
	<option value="Rajasthani">Rajasthani</option>
	<option value="North Indian">North Indian</option>
	<option value="Pizza">Pizza</option>
	<option value="Afghan">Afghan</option>
	<option value="Thai">Thai</option>
	<option value="Mongolian">Mongolian</option>
	<option value="South Indian">South Indian</option>
	<option value="Bakery">Bakery</option>
	<option value="Cafe">Cafe</option>
	<option value="Pan Asian">Pan Asian</option>
	<option value="Asian">Asian</option>
	<option value="Mediterranean">Mediterranean</option>
	<option value="Desserts">Desserts</option>
	</select>
</select>
</td>
</tr>

</table><br>
<input type="Submit" name="Submit" value="Search"/>
</div>
</form>
</body>
</html>
