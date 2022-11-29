<!DOCTYPE html>
<html>
    <title>
		<head>Overview of Orders</head>
	</title>
<?php
include "db_connect.php";
//QUERY FOR THE ORDER NUMBERS
$order = "SELECT DISTINCT CUS_ID from CUSTOMER";
$cus_id= $mysqli->query($order);

//QUERY FOR THE NUMBER OF ITEMS PER ORDER
$num_of_items = "SELECT COUNT(CUS_ID) FROM ITEM GROUP BY CUS_ID HAVING COUNT(CUS_ID)";
$numitems = $mysqli -> query($num_of_items);

$name = "SELECT CUS_FNAME,CUS_LNAME  from CUSTOMER";
$cus_fn= $mysqli->query($name);

?>
<body>

	<table align= "center" border="1px" style="width:900px; line-height:50px;">
		<tr>
			<th colspan="4"><h2>Order Overview</h2></th>
		</tr>
		<t>
			<th>Order Number</th>
			<th>Customer Name</th>
			<th># of Items Purchased</th>
		</t>
	<?php
		if ($cus_id->num_rows > 0) 
		{
			while (($row= $cus_id->fetch_assoc()) && ($row3= $cus_fn->fetch_assoc())
				&& ($row2= $numitems->fetch_assoc()))
			{
	?>
				<tr>
					<td><?php echo $row['CUS_ID'];?></td>
					<td><?php echo $row3['CUS_FNAME'];
							  echo " ";
							  echo $row3['CUS_LNAME'];?></td>
					<td><?php echo $row2['COUNT(CUS_ID)'];?></td>
					
				</tr>
	<?php
			} 
		}
	?>
	</table>
	<center>
	<?php echo "<br><br>"; ?>
	<?php echo "<br><br>"; ?>
	</center>
</body>
</html>