<?php
$servername = "50.87.195.157";
$username = "retaily7_lisa";
$password = "lisabates";
$db = "retaily7_retail_store";


$con = mysqli_connect($servername, $username, $password, $db);

if (!$con) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

# $txtName = $_POST['txtName'];
# $txtEmail = $_POST['txtEmail'];
# $txtPhone = $_POST['txtPhone'];
#,$txtMessage = $_POST['txtMessage'];



# $sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";


# $rs = mysqli_query($con, $sql);

# if($rs)
# {
	# echo "Contact Records Inserted";
# }

?>
