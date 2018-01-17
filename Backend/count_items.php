<?php
$db_connection=pg_connect("host=localhost dbname=restaurant_finder user=postgres password=Mayank");
session_start();
$restaurant=$_POST['hidde'];
$final=$_POST['hidd'];
$final_array=explode(',',$final);

$items=pg_query($db_connection,"Select * from menu,restaurant where restaurant.name='$restaurant' and restaurant.r_id=menu.r_id");
$i=0;
echo "<div class=\"container\">";
while($row=pg_fetch_row($items))
{
	$i++;
	echo "<div class=\"price\">".$row[1]." ".$final_array[$i]."</div>"."<br>";
	
}
echo "<form action=\"bills.php\" method=\"post\">";
echo "<input type=\"hidden\"  name='fina' value='$restaurant'>".'<br>';
echo "<input type=\"hidden\"  name='fin' id=\"hid\" value=\"$final\">".'<br>';
echo "<input type=\"submit\" value=\"confirm\">";
echo "</form>";
echo "<form action=\"orders.php\" method=\"post\">";
	
	echo "<input type=\"submit\" value=\"make changes\"/>";
	echo "</form></div>";
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="defaultStyle.css">
		<style>
		.price
		{
			display:inline-block;
			margin:20px;
			padding:20px;
			font-size:25px;
			border:none;
			background-color:gray;
		}
		input[type="submit"]
		{
			display:inline-block;
			margin:20px;
			padding:20px;
			font-size:25px;
			border:none;
			background-color:gray;
		}
		</style>
	</head>
</html>

