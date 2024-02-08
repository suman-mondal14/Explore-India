<?php
//ob_start();
//session_start();

include_once("dbconnect.php");

$mob="";
$password="";
$sql="";

$mob = $_POST['mobile'];
$password = $_POST['password'];

$sql = "Select * from user_information where Mobile='$mob' AND password='$password'";

$inter_res = mysqli_query($dbcon, $sql);
$res = mysqli_fetch_array($inter_res);

if($res[0]>0)
{
    session_start();
    $_SESSION['mobi'] = $mob;
    header("Location:homepage.php");
}
else
    header("Location: /Suman_Mondal(Project)/Error_Page/loginerror.php");

?>