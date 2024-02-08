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

//echo "<br><br><a href='logout.php'>Logout</a>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <!--CSS STYLE-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@700&family=Kumar+One&family=Mukta:wght@700&family=Tiro+Devanagari+Sanskrit:ital@1&display=swap');

        body {
            background-image: url("R.jpg");
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            color: rgb(248, 248, 248);
            margin: 0px;
            padding: 0px;
        }

        header {
            border: 2px solid white;
        }

        /*div.footer {
            border: 2px solid white;
            display: block;
            left: 2px;
            width: 1217px;
            height: 219px;
            margin-left: 4px;
            margin-top: 247px;
        }*/

        /*LEFT*/
        .left {
            /*border: 1px solid red;*/
            border: 1px dotted white;
            display: inline-block;
            position: absolute;
            left: 3px;
            top: 3px;
            height:111px;
            width:120px;
            padding-left: 5px;
            padding-right: 5px;
            text-align:center;
        }

        .left img {
            border-radius: 10%;
            width: 40px;
            height: 40px;
            padding: 16px;
            padding-right: 22px;
            padding-bottom: 45px;
        }

        .left div {
            text-align: center;
            padding-bottom: 0px;
            position: absolute;
            left: 19px;
            top: 79px;
        }

        .left a.login {
            color: white;
            text-decoration: none;
            text-align: center;
        }

        .left a{
            text-decoration: none;
            color: white;
        }

        /*MIDDLE*/
        .mid {
            /* border: 1px solid yellow;*/
            /* background-color: rgb(183, 183, 252);*/
            display: block;
            width: 330px;
            margin: auto;
            margin-top: -5px;
            padding: 10px;
            text-align: center;
        }

        .mid img {
            position: relative;
            left: -1px;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            padding: 5px;
        }

        .mid h6 {
            text-align: center;
            margin-bottom: 20px;
        }

        .exp {
            color: rgb(83, 224, 83);
            position: relative;
            bottom: 12px;
        }

        .exp::first-letter {
            color: orangered;
            font-size: large;
        }

        /*RIGHT*/
        .right {
            border: 1px dotted white;
            position: absolute;
            display: inline-block;
            top: 3px;
            right: 3px;
            padding: 30px;
            padding-bottom: 6px;
            text-align: center;
        }

        .right img {
            border-radius: 50%;
            width: 25px;
            height: 25px;
            padding: 5px;
            padding-bottom: 8px;
        }

        .right img:hover {
            border-radius: 38%;
        }

        .right div {
            text-align: center;
            padding-bottom: 0px;
        }

        /*NAVIGATION*/
        .nav {
            border: 1px solid white;
            background-color: rgba(0, 61, 87, 0.9);
            border-radius: 18px;
            display: block;
            width: 538px;
            margin: auto;
            margin-top: 29px;
        }

        .nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .nav li {
            display: inline-block;
            padding-left: 5px;
            padding-top: 2px;
        }

        .nav li a {
            display: inline-block;
            text-decoration: none;
            text-align: center;
            font-size: 18px;
            color: white;
            padding: 15px;
        }

        .nav a:hover {
            color: rgb(253, 108, 55);
        }

        .nav a:active {
            color: rgb(253, 108, 55);
        }

        .nav li a.home {
            color: orangered;
        }

        /*PARAGRAPH*/
        .paragraph {
            margin-top: 150px;
        }

        .welcome {
            text-align: center;
            border: 2px solid white;
            color: whitesmoke;
            display: block;
            width: 402px;
            margin: auto;
            padding: 5px;
            border-radius: 8px;
            cursor: pointer;
        }

        .welcome:hover {
            border: 2px solid rgba(255, 255, 255, 0.3);
            background-color: rgba(226, 217, 217, 0.1);
        }

        a.welcome {
            text-decoration: none;
            margin: auto;
        }


        /*Log Out Button*/
        .logout{
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            color:red;
            border-radius:20px;
            padding:2px;
            width:80px;
            cursor : pointer;
            background-color: white;
            border:none;
        }
        .logout:hover{
            background-color: rgb(190, 190, 190);
        }
    </style>

</head>

<body>

    <header>

        <!--LEFT-->
        <div class="left">
        <?php
            if($check)
            {
                $sql = "select fName from user_information where mobile='".$mob."'";
                $inter_res = mysqli_query($dbcon, $sql);
                $res = mysqli_fetch_array($inter_res);
        ?>
                <a href="Details.php">
                <?php
                echo "<p>Hii $res[0] !!</p>";
                ?>
                </a>
        <?php 
            }
        ?>

            <a href="logout.php">
                <button class="logout"><strong>Logout</strong></button>
            </a>
        
        </div>

        <!--MIDDLE-->
        <div class="mid">
            <img src="background1.gif">
            <div class="exp">Explore India</div>
        </div>

        <!--RIGHT-->
        <div class="right">
            <a href="https://www.facebook.com/"><img src="OIP1.jpg" class="social_media"></a>
            <a href="https://www.instagram.com/accounts/login/"><img src="OIP2.jpg" class="social_media"></a>
            <a href="https://twitter.com/"><img src="OIP3.jpg" class="social_media"></a>
            <div>Follow Us</div>
        </div>


    </header>

    <!--NAVIGATION-->
    <div class="nav">

        <ul>
            <li><a href="Home_page.html" class="home">Home</a></li>
            <li><a href="Explore_page.html">Explore</a></li>
            <li><a href="Bookings/bookings.html">Bookings</a></li>
            <li><a href="About_us.html">About Us</a></li>
            <li><a href="https://messages.google.com/web/authentication" target="_blank">Contact Us</a></li>
        </ul>

    </div>

    <!--PARAGRAPH-->

    <div class="paragraph" id="para">
        <a href="welcome.html" class="welcome">
            <h3>WELCOME TO INDIA</h3>
            <p>See the Beauty of India. Be a Traveller not a Tourist</p>
            <p>Pack your bags. We’re going on vacation!</p>

        </a>
    </div>
</body>

</html>