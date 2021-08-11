<?php
$username = "root";
$password = "";
$server ="localhost";
$db = "practice"; 
$con = mysqli_connect($server,$username,$password,$db);
//if in con database is not selected then uh can write db  later too
//$database = mysqli_select_db($con ,$db);
if(!$con)
{
    echo "connection not done";
    //die("no connection" . mysqli_connect_error());
}
?>

