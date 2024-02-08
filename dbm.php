<?php
ob_start();
include_once("dbconnect.php");

$mobile="";
$email="";

$name="";
$first="";
$middle="";
$last="";

$birthday="";
$gender="";

$pincode="";
$address="";
$town="";
$state="";

$password="";

$sql="";

$tmp_mobile="";

$mobile = $_POST['mobile'];
$email = trim($_POST['mail']);

$first = ucwords(strtolower(trim($_POST['first'])));
$middle = ucwords(strtolower(trim($_POST['middle'])));
$last = ucwords(strtolower(trim($_POST['last'])));
$name = $first." ".$middle." ".$last;
$birthday = $_POST['dob'];
$gender = $_POST['gen'];

$pincode = $_POST['pin'];
$address = trim($_POST['address']);
$town = $_POST['town'];
$state = $_POST['state'];

$password = $_POST['password'];

$tmp_mobile = "Select * from user_information where Mobile='$mobile'";
$inter_res = mysqli_query($dbcon, $tmp_mobile);
$res = mysqli_fetch_array($inter_res);


$target_dir = "Users/";
$target_filename = $target_dir.basename($_FILES["image"]["name"]);

if($res[0]>0)
{
    header("Location: /Suman_Mondal(Project)/Error_Page/signuperror.php");
}

if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_filename))
{
    $sql="insert into user_information values('".$mobile."','".$email."','".$first."','".$name."','".$birthday."','".$gender."','".$pincode."','".$address."','".$town."','".$state."','".$target_filename."','".$password."',current_timestamp())";
    if(mysqli_query($dbcon,$sql))
    {
    header("Location:SuccessMsg.php?msg='success'");
    }
    else
    echo "Server Error!!!!";
}
else
echo "Try Again!!!";

?>