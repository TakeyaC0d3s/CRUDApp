<?php 
$host ="localhost";
$uname = "root";
$pwd = "";
$db_name = "pokemondb";

$conn2 = mysqli_connect($host,$uname,$pwd,$db_name);

if($conn2)
{
    echo 'Connection 2 successful';
}else {
    die("Connection 2 failed because ".mysqli_connect_error());
}


?>
<br>