<!doctype html>
<html>
<?php
    session_start();
include 'conn.php';
if (isset($_SESSION['logged'])) {
} else {
    $_SESSION['logged'] = null;}
?>

<head>
    <meta charset="utf-8">
    <title>Bardoon Book Store</title>
    <link href="styles/home.css" rel="stylesheet" type="text/css">
</head>
<div style="padding-bottom: 10px;color:white;"><?=$_SESSION['logged'];?></div>

<body>


    <div class="topnav">

        <a class="active" href="index.php">HOME</a>
        <a href="books_page.php">BOOKS</a>
        <a href="contact_page.php">CONTACT</a>
        <a href="basket_page.php">BASKET</a>
        <div class="login-container">
            <form style="float:left;width:100px; margin-right:10px;" action="logout.php" method="post">
                <button type="submit">Logout</button>
            </form>
            <form style="float:right;width:100px;" action="process_login.php" method="post">
                <button type="submit">Login</button>
                <input type="text" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="psw" required>
            </form>
        </div>


        <div class="text">
            <div>Bardoon</div>
            <div>Book</div>
            <div>Store</div>
            <img class="logo" src="photos/bardoon.png" alt="logo" align="right">
        </div>
    </div>
    <div class="boxHome">
        <form action="process_register.php" method="post" style="border:1px solid #ccc">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="fn"><b>First Name</b></label>
                <input type="text" placeholder="Enter First Name" name="fn" required>

                <label for="ln"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="ln" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="contact"><b>Contact Number</b></label>
                <input type="text" placeholder="Enter Contact Number" name="contact" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
