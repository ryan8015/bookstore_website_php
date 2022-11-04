<!doctype html>
<html>
<?php
    session_start();
include 'conn.php';

if (isset($_SESSION['logged'])) {
} else {
    $_SESSION['logged'] = null;
}
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
        <div class="text">
            <div>Bardoon</div>
            <div>Book</div>
            <div>Store</div>
            <img class="logo" src="photos/bardoon.png" alt="logo" align="right">
        </div>
    </div>
    <div class="box">

        <div class="blue">
            <p class="beauty">Send Us A Query</p>
            
            <form action="process_query.php" method="post" style="border:1px solid #ccc">
                 <div class="container">
                <label for="nm"><b>Full Name</b></label>
                <input type="text" placeholder="Enter Full Name" name="nm" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="question"><b>Question</b></label>
                <input type="text" placeholder="Enter question" name="question" required>
                     <button type="submit">Send Query</button>
                </div>
            </form>
        </div>
        <div class="green">
            <p class="beauty">Social Media</p>
            <table align="center">
                <tr>
                    <td><img class="icon" src="photos/twitter_icon.jpg" alt="icon"></td>
                    <td><img class="icon" src="photos/facebook_icon.jpg" alt="icon"></td>
                    <td><img class="icon" src="photos/youtube_icon.jpg" alt="icon"></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
