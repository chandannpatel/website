<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="db_contact";

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect($server_name,$username,$password,$database_name);

// get the post records
//now check the connection
if(!$con)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['Submit']))
{
	$txtName = $_POST['txtName'];
    $txtEmail = $_POST['txtEmail'];
	$txtSocial = $_POST['txtSocial'];
	$txtMessage = $_POST['txtMessage'];
}


// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldSocial`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtSocial', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);


if($rs)
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($con);
	 }
	 mysqli_close($con);
	 
?>