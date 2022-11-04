<!doctype html>
<html>
<?php
        session_start();
include 'conn.php';
if (isset($_SESSION['logged'])) {
} else { 
    $_SESSION['logged'] = null;
        $hide = "display: none;";
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
    <div class="boxproduct">
        <?php
$id = $_GET['product_id'];
$query = ("SELECT * FROM books WHERE book_id='$id'");
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>
        <div style="float: left;" class="product">
            <img class="productbooks" src="photos/<?= $row["book_image"].".jpg";?>">
            <div style="float: right;" class="productText">
                <ul>Title: <?= $row["title"];?></ul>
                <ul>Author: <?= $row["author"];?></ul>
                <ul>Price: £<?= $row["price"];?></ul>
                <ul>Date: <?= $row["date"];?></ul>
                <ul>Genre: <?= $row["genre"];?></ul>
                <form action="basket_page.php" method="post">
                    <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
                    <a style="<?=$hide;?>" href="books_page.php"><button type="submit" name="book_id"class="cartbtn" value="<?=$row["book_id"];?>">ADD TO CART</button></a>
                </form>
            </div>
        </div>
    </div>
    <ul class="productDesc" style="color: white;font-size: 20px;margin-right:10px;">Description: <?= $row["description"];?></ul>
</body>

</html>
