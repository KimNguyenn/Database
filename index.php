

<!DOCTYPE html>
<html>
    <title>
		<head> Main Page</head>
	</title>
	<center>
	<h1>Welcome to Squarely Odd Kidz Retail Store</h1>
	<h2>----------------------------------------------------------------------------------</h2>
	</center>
<?php
include "db_connect.php";
include "form.php";
if ($mysqli->connect_errno){
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;}
$mysqli->close();
?>
<center>
<h2>Link below is for admin use!</h2>
<a href="admin.php"> Click here if admin </a>
</center>
<body>

</body>
</html>