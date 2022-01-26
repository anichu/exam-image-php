<?php  

$localhost = "localhost";
$userName = "root";
$password = "";
$dbName = "crud";
$connection = mysqli_connect("localhost","root","","exam");

if ($connection -> connect_errno) {
  echo "Failed to connect to MySQL: " . $connection -> connect_error;
  exit();
}


if($connection){
  // echo "DB Connected🔥🔥🔥🔥🔥";
}
?>