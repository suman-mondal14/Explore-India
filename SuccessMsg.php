<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Details</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@700&family=Kumar+One&family=Mukta:wght@700&family=Tiro+Devanagari+Sanskrit:ital@1&display=swap');
        .box{
            border:2px solid rgb(16, 122, 69);
            margin: auto;
            width: 500px;
            text-align: center;
            position: relative;
            top: 100px;
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            border-radius: 20px;
        }
        img{
            height: 100px;
            width: 100px;
        }

        .login{
            /*border: 2px solid red;*/
            width: 200px;
            position: relative;
            margin: auto;
            text-align: center;
            top: 150px;
        }

        .login button{
            border: 2px solid rgb(16, 122, 69);
            padding: 5px;
            font-family: 'Baloo Bhaijaan 2', 'cursive';
            font-size: large;
            background-color:rgb(16, 122, 69);
            border-radius: 40px;
            cursor: pointer;
            color: white;
            width: 150px;
        }
        
        .login a{
            text-decoration: none;
        }

        .login button:hover{
            background-color: rgb(13, 99, 56);
            border: 2px solid rgb(13, 99, 56);
        }
       
    </style>
</head>
<body>
    <div class="box">
        <h1>Profile Created Succesfully</h1>
        <img src="green-tick-checkbox-illustration-isolated-on-white-background-free-vector.jpg" alt="">
    </div>

    <div class="login">
            <a href="Login_Page.php"><button>Login Now</button></a>
    </div>
</body>
</html>