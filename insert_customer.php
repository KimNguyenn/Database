<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		include "db_connect.php";
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['CUS_FNAME'];
		$last_name = $_REQUEST['CUS_LNAME'];
		$PHONE = $_REQUEST['CUS_PHONE'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO customer VALUES (NULL,'$first_name',
			'$last_name','$PHONE')";
		
		
		mysqli_query($mysqli, $sql);
        // Close connection
        mysqli_close($mysqli);
		
		?>
		<?php include "buy.php"; ?>
	<a href="index.php"> Click me to return back to main page </a>
	</center>
	
</body>

</html>
