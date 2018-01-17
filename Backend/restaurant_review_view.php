<?php
$db_connection=pg_connect("host=localhost dbname=restaurant_finder user=postgres password=Mayank");
session_start();
$review=$_POST['Review'];
$result=pg_query($db_connection,"Select * from review where r_id in (Select r_id from restaurant where name='$review') ");
$count=pg_query($db_connection,"Select count(*) from review where r_id in (Select r_id from restaurant where name='$review') ");
$count=pg_fetch_row($count);
$avg=pg_query($db_connection,"Select avg(rating) from review where r_id in (Select r_id from restaurant where name='$review')");
$avg=pg_fetch_row($avg);
?>
<html>
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
table
{
margin-top:200px;;
font-size:25px;
background-color:#f3f7f9;
opacity:0.9;
width:75%;
box-shadow:0px 0px 25px 5px white;
}
td
{
padding:10px;
border:0.5px solid white;
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
<?php
/*	while ($row = pg_fetch_row($result)) 
	{
	echo "$row[0]"."    ". "$row[1]"."  ". "$row[2]";
	echo "<br>";
	}
	echo "Average Rating:"."$avg[0]";
	*/
if($count[0]>0){
echo "<table><tr>
<td>Title
</td>
<td>Rating
</td>
<td>Content
</td>
<td>Average Rating
</td>
</tr>";
while ($row = pg_fetch_row($result)) 
	{
	echo "<tr>
<td>$row[0]
</td>
<td>$row[1]
</td>
<td>$row[2]
</td>
<td>$avg[0]
</td>
</tr>";}echo "</table>";
}
else
	echo "<div class=\"message\">No reviews till now!Be the first one to review it.</div>";
?>
</body>
</html>
