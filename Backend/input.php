<?php
$db_connection=pg_connect("host=localhost dbname=restaurant_finder user=postgres password=Mayank");
session_start();
$title=$_POST['Title'];
$content=$_POST['Content'];
$rating=$_POST['Rating'];
$c_id=$_POST['Customer_id'];
$restaurant=$_POST['Restaurant'];
$count_cust=pg_query($db_connection,"Select count(*) from customer where customer.c_id='$c_id'");
$count_cust=pg_fetch_row($count_cust);

$r_id=pg_query($db_connection,"Select R_id from restaurant where name='$restaurant'");
$r_id=pg_fetch_row($r_id);
$count=pg_query($db_connection,"Select count(*) from customer,employee where customer.e_id=employee.e_id and employee.r_id='$r_id[0]'");
$count=pg_fetch_row($count);
if($count[0]>0 && $count_cust[0]>0)
$result=pg_query($db_connection,"Insert into review Values('$title','$content','$rating','$c_id','$r_id[0]')");
?>
<head>
<link rel="stylesheet" type="text/css" href="defaultStyle.css">
<style>
.message
{
width:100%;
font-size:25px;
text-align:center;
border:none;
padding:30px;
background-color:#f3f7f9;
opacity:0.9;
margin-top:300px;
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
<?php
if($count[0]>0 && $count_cust[0]>0)
echo "<div class=\"message\">Thank you, your response has been recorded</div>";
else
echo "<div class=\"message\">Sorry!You cannot enter a review for a restaurant you have not visited</div>";
?>
</body>
</html>
