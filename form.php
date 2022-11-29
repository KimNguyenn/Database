<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<center>
	<?php
	include "db_connect.php";
	
	?>
		<h2>CUSTOMER FORM</h2>
		<h3>Please enter your information below to shop: </h3>
		<form action="insert_customer.php">
			
			<p>
               <label for="firstName">First Name:</label>
               <input type="text" name="CUS_FNAME" id="firstName">
            </p>
 
             
			<p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="CUS_LNAME" id="lastName">
            </p>
 
             
			<p>
               <label for="Gender">Phone:</label>
               <input type="text" name="CUS_PHONE" id="Phone">
            </p>

			<input type="submit" value="NEW CUSTOMER">
		</form>
		
		<h2>----------------------------------------------------------------------------------</h2>
	
	</center>
</body>
</html>
