<!DOCTYPE html>
<html>

<head>
	<title>Insert Item page</title>
</head>

<body>
	
	<center>
		  <?php
		  include "db_connect.php";

		  ?>
			<h2>Thank you for buying from SQUARELY ODD KIDZ!</h2>

			<h2>------------------------------------------------------------------</h2>
			<h1>Receipt</h1>
			<h2>------------------------------------------------------------------</h2>
		  <?php
		  if(isset($_POST['save_checks'])){
			  $item_d = $_POST['ITEM_DESCRIPTION'];
			  $total=0;
			  foreach($item_d as $items)
			  {
				//Prints the items selected by the customer
				echo $items."<br>";
				
				//Query to select the item numbers of the chosen items
				$item_n="select item_num from item where item_description= '$items'";
				$itemnum = mysqli_query($mysqli, $item_n);
				
				//Query to select the price of each chosen item
				$item_p="select distinct(item_price) from item where item_description= '$items'";
				$itemprice = mysqli_query($mysqli, $item_p);
				
				//Selects the last CUS_ID from the Customer table to assign that cus_id to the Items table
				$maxid= "select max(cus_id) from customer";
				$cusmax = mysqli_query($mysqli, $maxid);
				
				//Fetches the CUS_ID
				$rowtest3 = mysqli_fetch_row($cusmax);
				
				//Fetches the item numbers of each item
				while ($rowtest= $itemnum->fetch_assoc())
				{
					$number_i=$rowtest['item_num'];
				} 
				//Fetches the price of each item
				while($rowtest2= $itemprice->fetch_assoc())
				{
					$price_i= $rowtest2['item_price'];
					//Displays the price after every item
					echo "$ ";
					echo $price_i."<br>";
				} 
				//Calculates the total price of all of the purchased items
				$total += $price_i;
				//Inserts into the Item table of what the Customer bough
				$in_desc="INSERT INTO ITEM VALUES ('$number_i', '$rowtest3[0]', '$price_i', '$items')";
				$run= mysqli_query($mysqli, $in_desc);
			  }
			  ?>
				<h2>------------------------------------------------------------------</h2>
			  <?php
			  //Displays the total amount 
			  echo "Total: $";
			  echo $total."<br>";
		  }

        // Close connection
        mysqli_close($mysqli);
		?>
		<h2>------------------------------------------------------------------</h2>
		<?php echo "<br><br>"; ?>
		
		<a href="index.php"> Click here to return back to main page! </a>
	</center>
	
</body>

</html>
