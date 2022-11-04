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
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Password" name="psw">
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
            <div class="container">
              <h1>Your Order Has Been Placed</h1>
    <p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
                </div>
    </div>

</body>

</html>
