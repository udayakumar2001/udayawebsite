<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$host        = "host=ec2-18-215-96-22.compute-1.amazonaws.com";
$port        = "port=5432";
$dbname      = "dbname = d1uttm14vli79m";
$credentials = "user = ahrahipezdqduv password=68f14fa49232785fb28dfe160fae7d1e7973d4246514af497f1860fd0b84e8a8";

$con = pg_connect( "$host $port $dbname $credentials"  );

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO tbl_contact(fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage');";
//echo $sql;

// insert in database 
$rs = pg_query($con, $sql);

if($rs)
{
  echo "Contact Records Inserted";
}else{
  echo "Contact Not Inserted";
}

?>
