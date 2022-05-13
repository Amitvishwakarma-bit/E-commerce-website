<?php
session_start();
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Login page</title>
        <link rel="stylesheet" type="text/css" href="loginStyle.css">
    </head>

    <body>
        <div>
            <h2><b>Login form</b></h2>
            <form action="validatelogin.php" method="POST">
                <div class="login">
                    <img alt="Shop_online" src="images\e-commerce1.jpg"><br><br>

                    <label for="username"><b>Username</b></label><br>
                    <input type="text" id="un" placeholder="Enter Username" name="username" required><br><br>

                    <label for="psw"><b>password</b></label><br>
                    <input type="password" id="psw" placeholder="Enter password" name="psw" required><br><br>

                    <button id="log" type="submit"><b>login</b></button><br><br>

                    <label for="check">
				<input type="checkbox" checked="checked" name="check" >
			     remember password
			 </label>


                </div>

                <div class="container">
                    <span class="psw"><a href="forget_password.html">forgot password?</a></span> new user?<a href="sign-in.html">sign in here</a>
                </div><br><br>



            </form>
        </div>
    </body>

    </html>