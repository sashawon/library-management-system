<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LMS";

$con = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($con,'SET CHARACTER SET utf8');
mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");

if($con)
{
echo "";
}
else
{
die ("Connection failed because ".mysqli_connect_error());
}
?>