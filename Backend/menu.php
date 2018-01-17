<?php
$db_connection=pg_connect("host=localhost dbname=restaurant_finder user=postgres password=Mayank");
session_start();
$restaurant=$_POST['Restaurant'];
$items=pg_query($db_connection,"Select * from menu,restaurant where restaurant.name='$restaurant' and restaurant.r_id=menu.r_id");
echo "<div class=\"container\">";
echo '<form id="B" action="count_items.php" method="post">';
$count=0;
while($row=pg_fetch_row($items))
{
++$count;
echo "<input type=\"button\" style=\"font-size:30px;\" name=\"$count\" value=\"$row[1]\" id=\"$count\"\">"."<div style=\"font-size:30px\">$row[2]</div>"."<br>";

}
$_SESSION['count']=$count;
echo "<br>";
echo "<input type=\"hidden\"  name='hidde' value='$restaurant'>".'<br>';
echo "<input type=\"hidden\"  name='hidd' id=\"hid\">".'<br>';
echo "<input class=\"price\" type='submit' name='submit' onclick='sub()'>";
echo '</form>';
echo "</div>";
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
</style>
</head>	
	<body>
		<script>		
		var count="<?php echo $count; ?>"
		var b=[]
		var i=0;
		
		var clicks=[]
		while(count>0)
		{
			b.push(document.getElementById(count));
			count--;
		}
		count="<?php echo $count ?>"
		while(count>0)
		{
			b[i].addEventListener('click',button_click);
			++i;
			count--;
		}	
		function button_click(e)
		{
			
			if(!clicks[this.id])
				clicks[this.id]=0
			clicks[this.id]++;
		
		
		}
		
		function sub()
		{
			clicks=clicks.toString()
			document.getElementById('hid').value=clicks;
		}
		
		</script>
	
	
	
	</body>
</html>




