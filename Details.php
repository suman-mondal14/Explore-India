<?php
ob_start();
session_start();

include_once("dbconnect.php");

$mob="";
$sql="";
$check=false;

if(isset($_SESSION['mobi']))
{
    $mob=$_SESSION['mobi'];
    $check=true;

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@700&family=Kumar+One&family=Mukta:wght@700&family=Tiro+Devanagari+Sanskrit:ital@1&display=swap');
    body
    {
        font-family: 'Baloo Bhaijaan 2', 'cursive';
        background-color: rgb(230, 227, 227);
    }

    /*Logo*/
    div.logo{
        /*border: 2px solid rebeccapurple;*/
        width: 200px;
        height: 100px;
        font-size: 30px;
        text-align: center;
    }
    .logo span{
        color: rgb(43, 129, 43);
        position: relative;
        top: 8px;
    }
    .logo::first-letter{
        color: orangered;
        font-size: 32px;
    }

    /*h2{
        text-align: center;
        position: absolute;
        top:50px;
        margin:auto;
    }*/
    div.container{
        border: 2px solid rgb(43, 129, 43);
        height:440px;
        width : 600px;
        position: relative;
        margin:auto;
        text-align: center;
        padding:30px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 10), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 30px;
        bottom:30px;
       
    }

    div.container img{
        border-radius: 50%;
        border: 2px solid rgb(43, 129, 43);
        height:170px;
        width:170px;
        position: relative;
        bottom:150px;
    }

    div.values{
        /*border: 2px solid red;*/
        text-align: left;
        width:200px;
        position: relative;
        left:350px;
        bottom:151px;
    }
    div.values span{
        color : rgb(73, 72, 72);
    }

    div.field{
        width:200px;
        /*border: 2px solid red;*/
        text-align: left;
        position: relative;
        top:200px;
        left:110px;
        

    }
    div.field span{
        
        color:black;

    }

    div.container h2{
        position: relative;
        top:-30px;
        font-size: 25px;
    }
    </style>
</head>
<body>

<div class="logo">
    <span>Explore India</span>
</div>

<div class="container">
    <h2><u>Your Profile</u></h2>
    <div class="field">
        <span>Username</span>
        <br>
        <span>Name</span>
        <br>
        <span>Mobile Number</span>
        <br>
        <span>Email</span>
        <br>
        <span>State</span>
    </div>
    <?php
    if($check)
    {
    $sql = "select * from user_information where mobile='".$mob."'";
    $inter_res = mysqli_query($dbcon, $sql);
    $res = mysqli_fetch_array($inter_res);
    echo "<img src='".$res[10]."'>";
    echo "<br>";
    echo "<br>";
    ?>
    <div class="values">
        <?php
        echo "<span>$res[2]</span>";
        echo "<br>";
        echo "<span>$res[3]</span>";
        echo "<br>";
        echo "<span>$res[0]</span>";
        echo "<br>";
        echo "<span>$res[1]</span>";
        echo "<br>";
        echo "<span>$res[9]</span>";
        ?>
    </div>
<?php
    }
?>
</div>
    
</body>
</html>




