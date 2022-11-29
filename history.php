<!DOCTYPE html>
<html>

<head>
	<title>Order History Page</title>
</head>

<body>
	<center>
	<h2>----------------------------------------------------------------------------------</h2>
	
		<?php
		include "db_connect.php";
		//Prints the order history with selected fields
		$query_info = "SELECT item.cus_id, item.item_description, company.company_name, company.company_city ,company.company_state FROM item inner join company on item.item_num=company.item_num ORDER BY item.cus_id ASC"; 
		$qinfo= $mysqli->query($query_info);
		
		$name1 = "SELECT CUS_FNAME,CUS_LNAME from CUSTOMER inner join item on customer.cus_id=item.cus_id";
		$cus_full= $mysqli->query($name1);
		?>
		<table align= "center" border="1px" style="width:900px; line-height:50px;">
		<tr>
			<th colspan="5"><h2>Order History</h2></th>
			
	
		</tr>
		<t>
			<th>Order Number</th>
			<th>Customer Name</th>
			<th>Item Description</th>
			<th>Company Name</th>
			<th>Company Location</th>
		</t>
	<?php
		if ($qinfo->num_rows > 0) 
		{
			while (($rowt= $qinfo->fetch_assoc()) && ($rowt2= $cus_full->fetch_assoc())) 
			{
	?>
				<tr>
					<td><?php echo $rowt['cus_id'];?></td>
					<td><?php echo $rowt2['CUS_FNAME'];
							  echo " ";
							  echo $rowt2['CUS_LNAME'];?></td>
					<td><?php echo $rowt['item_description'];?></td>
					<td><?php echo $rowt['company_name'];?></td>
					<td><?php echo $rowt['company_city'];
							  echo ", ";
							  echo $rowt['company_state'];?></td>
					
				</tr>
	<?php
			} 
		}
	?>
	</table>
	<h2>----------------------------------------------------------------------------------</h2>
	
	<?php echo "<br><br>"; ?>
	<a href="index.php"> Click me to return back to main page </a>
	</center>
	
</body>

</html>
