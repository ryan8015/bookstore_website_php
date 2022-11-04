<!doctype html>
<html>
<?php
        session_start();
include 'conn.php';
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);


if (isset($_SESSION['logged'])) {
} 
    else {
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
            <?php
while($row = mysqli_fetch_assoc($result)) {
    ?>
            <a href="product_detail.php?product_id=<?=$row['book_id']?>" id="product_id"><img class="books" src="photos/<?= $row["book_image"].".jpg";?>"></a>
            <?php } ?>
        </div>
    </div>
</body>

</html>
