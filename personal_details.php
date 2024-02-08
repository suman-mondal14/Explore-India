<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>

    <!--Style Sheet-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@700&family=Kumar+One&family=Mukta:wght@700&family=Tiro+Devanagari+Sanskrit:ital@1&display=swap');

        body {
            background-color: lightgray;
            font-family: 'Baloo Bhaijaan 2', 'cursive';
        }

        /*LOGO
        .logo img {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            position: relative;
            left: 17px;
            top: 9px;
        }

        .logo {
            /*border: 1px solid green
            position: absolute;
            top: -3px;
            left: 9px;
        }

        .exp {
            color: green;
            text-align: center;
        }

        .exp::first-letter {
            color: orangered;
            font-size: large;
        }*/

        .box {
            border: 2px solid rgb(46, 170, 108);
            color: black;
            border-radius: 15px;
            text-align: center;
            position: relative;
            width: 1330px;
            height: 1590px;
            margin: auto;
        }

        img {
            height: 100px;
            width: 100px;
            border-radius: 50%;
        }
        input.photo {
            position: relative;
            left: 52px;
        }

        /*Section 1*/
        div.section1 {
            position: relative;
            float: left;
            width: 1330px;
            height: 180px;
            /*border: 2px solid red;*/
            background-color: white;
            top: 9px;
            padding-top: 15px;
        }
        .photo{
            font-family: 'Baloo Bhaijaan 2', 'cursive';
        }

        /*Section 2*/
        div.section2{
            position: absolute;
            width: 1310px;
            height: 340px;
            top: 452px;
            background-color: white;
            padding-left: 20px;
            text-align: left;
            /*border: 2px solid rebeccapurple;*/
        }

        h2 {
            text-align: left;
        }

        .in {
            background-color: white;
            padding: 5px;
            padding-left: 10px;
            border-radius: 8px;
            border: 1px solid rgb(23, 112, 67);
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            text-align: center;
        }
        #dob{
            border: 1px solid rgb(23, 112, 67);
        }

        /*Section 3*/
        div.section3{
            position: absolute;
            width: 1310px;
            height: 495px;
            top: 797px;
            background-color: white;
            padding-left: 20px;
            text-align: left;

        }

        /*password*/
        div.password{
            /*border: 1px solid red;*/
            background-color: white;
            position: absolute;
            padding-left: 20px;
            width: 1310px;
            top: 1297px;
            text-align: center;
            float: left;
            height: 150px;
        }
        #pass{
            float: left;
        }


        /*Section 4*/
        div.section4{
            /*border: 2px solid rebeccapurple;*/
            position: absolute;
            top: 1500px;
            /*background-color: white;*/
            padding-left: 20px;
            text-align: center;
            width: 1309px;
        }
        .btn{
            border-radius: 20px;
            padding: 10px;
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            width: 200px;
        }
        #submit{
            border: 1px solid rgb(46, 170, 108);
            background-color: rgb(46, 170, 108);
            cursor: pointer;
        }
        #submit:hover{
            border: 1px solid rgb(23, 112, 67);
            background-color: rgb(23, 112, 67);
        }
        #reset{
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            border: 1px solid rgb(0, 0, 0);
            background-color: lightgray;
            cursor: pointer;
        }
        #reset:hover {
            border: 1px solid rgb(0, 0, 0);
            background-color: rgb(172, 172, 172);
        }
        div.section4 button{
            border-radius: 20px;
            padding: 10px;
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            width: 200px;
        }

        /*Back Button*/
        button{
            position: relative;
            top: -410px;
            left: 10px;
            float: left;
            padding: 5px;
            border: 2px solid darkgreen;
            border-radius: 10px;
        }
        button a{
            text-decoration: none;
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            color: darkgreen;
        }
        button::first-letter {
            color: orangered;
            font-size: large;
        }

        button:hover {
            background-color: rgb(190, 190, 190);
        }

    </style>
</head>

<body>

    <!--LOGO
    <div class="logo">
        <img src="background1.gif" alt="">
        <div class="exp">
            Explore India
        </div>
    </div>-->

    <!--Details-->
    <div class="box">
        <h1>Create Account</h1>
        <!--Form-->
        <form action="dbm.php" method="post" enctype="multipart/form-data">

            <img src="360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" id="profile" alt="">
            <br><input type="file" name="image" class="in" id="img" onchange="change()" required>

            <div class="section1">
                Mobile Number<br><input type="text" class="in" name="mobile" placeholder="Enter Mobile Number" required><br><br>
                Email Address<br><input type="text" class="in" name="mail" placeholder="Enter Email" required>
            </div>


            <div class="section2">
                <h2><u>Personal Details</u></h2>
                Name <br><input type="text" class="in" name="first" placeholder="First Name" required>
                <input type="text" class="in" name="middle" placeholder="Middle Name">
                <input type="text" class="in" name="last" placeholder="Last Name" required><br><br>
                Birthday <br><input type="date" name="dob" class="in" id="dob"><br><br>
                Gender <br><input type="radio" name="gen" value="male">Male
                <input type="radio" name="gen" value="female">Female
            </div>


            <div class="section3">
                <h2><u>Address</u></h2>
                Area Pincode <br><input type="text" name="pin" class="in" placeholder="E.g. 56001" required><br><br>
                Address <br><textarea name="address" class="in" cols="30" rows="3" placeholder="Flat No., House No., Building, Area, Colony, Street, Sector, Village" required></textarea><br><br>
                Town/City <br><input type="text" name="town" class="in" placeholder="E.g. Kolkata" required><br><br>
                State <br><input type="text" name="state" class="in" placeholder="E.g. West Bengal"required>
                
            </div>


            <div class="password">
                <h2><u>Create Password</u></h2>
                <input type="password" name="password" class="in" id="pass" placeholder="Create a Strong Password" required>
            </div>

            <div class="section4">
                <input type="submit" name="submit" value="SIGN UP" class="btn" id="submit">
                &nbsp;&nbsp;&nbsp;
                <input type="reset" name="reset" value="CLEAR" class="btn" id="reset">
                &nbsp;&nbsp;&nbsp;
            </div>
        </form>

        <!--Back Button-->
        <button>
            <a href="Login_Page.php">Back</a>
        </button>
    </div>
    <script src="personal_details.js"></script>
</body>

</html>