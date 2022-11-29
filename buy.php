<html lang="en">
<head>
</head>
<body>
	<center>
	<h2>----------------------------------------------------------------------------------</h2>
	
	<?php
	include "db_connect.php";
	echo "<br><br>";
	?>
		<div>
		<form action="insert_item.php" method="POST">
		<?php
		//Query to access the ITEM_DESCRIPTION field of the item table to create a checkbox list
		$select = "select DISTINCT(item.item_description) from item inner join customer on item.cus_id=customer.cus_id";
		$options= mysqli_query($mysqli, $select);
		
		//$pr= "select item_price from item";
		//$price= mysqli_query($mysqli, $pr);
		if (mysqli_num_rows($options) > 0){
               foreach($options as $checkbox)
               {
				?>
					
					<input type="checkbox" name="ITEM_DESCRIPTION[]" value= "<?= $checkbox['item_description'];?>" /><?= $checkbox['item_description'];?><br/>							                                            
				<?php
               }
           }
          ?>
		<div>
			<button name="save_checks" class= btn btn-primary">Buy items</button>
		</div>
		</form>
		</div>
		<h2>----------------------------------------------------------------------------------</h2>
	
	</center>
</body>
</html>



