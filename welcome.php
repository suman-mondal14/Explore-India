<?php

ob_start();
session_start();

include_once("dbconnect.php");

$mob="";
$sql="";

if(isset($_SESSION['mobi']))
{
    $mob=$_SESSION['mobi'];
}

$sql = "select Name from user_information where mobile='".$mob."'";
$inter_res = mysqli_query($dbcon, $sql);
$res = mysqli_fetch_array($inter_res);

echo "<h2>Welcome $res[0]<h2>";
echo "<br><br><a href='logout.php'>Logout</a>";
?>