<?php
$db_connection=pg_connect("host=localhost dbname=restaurant_finder user=postgres password=Mayank");
session_start();
$name=$_POST['Name'];

$street=$_POST['Street'];
$state=$_POST['State'];
$zip=$_POST['Zip'];
$date=$_POST['Dateofjoin'];
$role=$_POST['Role'];
$restaurant=$_POST['Restaurant'];

$e_id=uniqid("E");
$r_id=pg_query($db_connection,"Select r_id from restaurant where name='$restaurant'");
$row = pg_fetch_row($r_id);
$result_r_id=$row[0];
$result=pg_query($db_connection,"Insert into Employee Values('$e_id','$name',$zip,'$date','$result_r_id','$role')");
?>
<head>
<link rel="stylesheet" href="defaultStyle.css">
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
echo "<div class=\"message\">Thank you! Your response has been recorded</div>";
?>
</body>
</html>
