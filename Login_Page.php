<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore India Login</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@700&family=Kumar+One&family=Mukta:wght@700&family=Tiro+Devanagari+Sanskrit:ital@1&display=swap');

        body {
            background-color: lightgray;
            font-family: 'Baloo Bhaijaan 2', 'cursive';
        }

        .login {
            /*border: 2px solid black;*/
            position: absolute;
            height: 630px;
            width: 865px;
            background-color: lightgray;


        }

        .signup {
            border: 1px solid rgb(46, 170, 108);
            background-color: rgb(46, 170, 108);
            border-radius: 15px;
            position: absolute;
            height: 638px;
            width: 481px;
            top: 8px;
            right: 8px;
        }

        /*Left Box*/
        #left_box {
            border: 2px solid rgb(46, 170, 108);
            border-radius: 30px;
            position: relative;
            width: 557px;
            height: 378px;
            margin: auto;
            top: 125px;
        }

        /*Form Design*/
        #left_box form {
            position: absolute;
            left: 188px;
            top: 124px;
        }

        .left_heading {
            text-align: center;
        }

        /*Forgot Password Button*/
        .forgot_password button {
            position: absolute;
            top: 223px;
            right: 200px;
            color: blue;
            font-size: 11px;
            border: none;
            background-color: lightgray;
            cursor: pointer;
        }

        .forgot_password button:hover {
            color: rgb(0, 0, 107);
        }

        /*Sign In Button*/
        /*.click button {
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            font-size: medium;
            position: relative;
            width: 127px;
            top: 178px;
            left: 212px;
            border: 1px solid rgb(46, 170, 108);
            background-color: rgb(46, 170, 108);
            border-radius: 40px;
            padding: 5px;
            cursor: pointer;
        }

        .click button:hover {
            border: 1px solid rgb(23, 112, 67);
            background-color: rgb(23, 112, 67);
        }*/

        /*Logo*/
        #logo img {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            position: relative;
            left: 17px;
            top: 9px;
        }

        #logo {
            /*border: 1px solid green;*/
            position: absolute;
            top: -11px;
            left: 1px;
        }

        .exp {
            color: green;
            text-align: center;
        }

        .exp::first-letter {
            color: orangered;
            font-size: large;
        }

        /*Right Box*/
        #right_box {
            /* border: 2px solid red;*/
            text-align: center;
            position: absolute;
            width: 200px;
            left: 144px;
            top: 182px;
        }

        /*Sign Up Button*/
        .click2 button {
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            font-size: medium;
            position: absolute;
            width: 127px;
            top: 369px;
            left: 188px;
            border: 1px solid lightgray;
            background-color: lightgray;
            border-radius: 40px;
            padding: 5px;
            cursor: pointer;
        }

        .click2 button:hover {
            border: 1px solid rgb(172, 172, 172);
            background-color: rgb(172, 172, 172);
        }
        .in{
            border: 1px solid rgb(23, 112, 67);
            border-radius: 20px;
            padding: 5px;
            padding-left: 10px;
            font-family:'Baloo Bhaijaan 2', 'cursive' ;
        }

        /*form* button*/
        form button.click{
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            font-size: medium;
            position: relative;
            top:70px;
            right: 149px;
            width: 127px;
            border: 1px solid rgb(46, 170, 108);
            background-color: rgb(46, 170, 108);
            border-radius: 40px;
            padding: 5px;
            cursor: pointer;
        }
        form button.click:hover{
            border: 1px solid rgb(23, 112, 67);
            background-color: rgb(23, 112, 67);
        }
    </style>

</head>

<body>

    <!--Login-->
    <div class="login">

        <!--LOGO-->
        <div id="logo">
            <img src="background1.gif" alt="">
            <div class="exp">
                Explore India
            </div>
        </div>

        <div id="left_box">
            <h1 class="left_heading">Login to Your Account</h1>

            <form action="login.php" method="post">
                    <input type="text" name="mobile" id="mobile" class="in" placeholder="Mobile No." required>
                    <br><br>
                    <input type="password" name="password" id="password" class="in" placeholder="Password" required>
                    <button type = "submit" name="login" class="click">Sigin</button>
            </form>
            <div class="forgot_password">
                <button>Forgot Password ?</button>
            </div>

        </div>

    </div>

    <!--Sign Up-->
    <div class="signup">

        <div id="right_box">
            <h1>New Here ?</h1>
            <p>" Sign up and Explore the Beauty of India "</p>
        </div>

        <div class="click2">
            <a href="personal_details.php">
                <button>Sign Up</button>
            </a>
        </div>

    </div>

</body>

</html>