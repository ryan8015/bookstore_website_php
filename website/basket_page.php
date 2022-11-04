<!doctype html>
<html>
<?php
        session_start();

function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = '19156892';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}

$pdo = pdo_connect_mysql();
if (isset($_SESSION['logged'])) {
} else {
    $_SESSION['logged'] = null;
}
    $email = $_SESSION["logged"];
    ?>
<?php
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['book_id'], $_POST['quantity']) && is_numeric($_POST['book_id']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $book_id = (int)$_POST['book_id'];
    $quantity = (int)$_POST['quantity'];
    
    $stmt = $pdo->prepare('SELECT * FROM books WHERE book_id = ?');
    $stmt->execute([$_POST['book_id']]);
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
    // Fetch the product from the database and return the result as an Array
    // Check if the product exists (array is not empty)
    if ($book && $quantity > 0) {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($book_id, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$book_id] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$book_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($book_id => $quantity);
        }
    }

}
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: basket_page.php?page=cart');
    exit;
}
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('location: process_order.php');
    exit;
}
// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$books = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM books WHERE book_id IN (' . $array_to_question_marks . ')');
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($books as $book) {
        $subtotal += (float)$book['price'] * (int)$products_in_cart[$book['book_id']];
    }
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
        <div class="blue">
            <div class="cart content-wrapper">
                <h1 class="text">Shopping Cart</h1>
                <form action="basket_page.php?page=cart" method="post">
                    <table>
                        <thead>
                            <tr>
                                <td colspan="2">Product</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($books)): ?>
                            <tr>
                                <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                            </tr>
                            <?php else: ?>
                            <?php foreach ($books as $book): ?>
                            <tr>
                                <td class="img">
                                    <a href="product_detail.php?product_id=<?=$book['book_id']?>">
                                        <img class="productbooks" alt="<?=$book['title']?>" src="photos/<?= $book["book_image"].".jpg";?>">
                                    </a>
                                </td>
                                <td>
                                    <a href="product_detail.php?product_id=<?=$book['book_id']?>"><?=$book['title']?></a>
                                    <br>
                                    <p style="font-size:20px;"><a href="basket_page.php?page=cart&remove=<?=$book['book_id']?>" class="remove">Remove</a></p>
                                </td>
                                <td class="price">&dollar;<?=$book['price']?></td>
                                <td class="quantity">
                                    <input type="number" name="quantity-<?=$book['book_id']?>" value="<?=$products_in_cart[$book['book_id']]?>" min="1" max="<?=$book['quantity']?>" placeholder="Quantity" required>
                                </td>
                                <td class="price">&dollar;<?=$book['price'] * $products_in_cart[$book['book_id']]?></td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">&dollar;<?=$subtotal?></span>
        </div>
                    <div class="buttons"> 
                        <input type="submit" value="Update" name="update">
                        <input type="submit" value="Place Order" name="placeorder">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <?php
    #joining tables for the grading criteria not really needed
    include 'conn.php';
$sql3 = ("SELECT customer.customer_id, customer.email, customer.first_name, customer.last_name, `order`.order_id, `order`.order_date,question.subject,question_id
FROM customer 
LEFT JOIN `order` 
ON customer.email = `order`.`email` 
JOIN question 
ON customer.email = question.email 
WHERE customer.email='$email'");
$result = mysqli_query($conn, $sql3);
?>
    <h2 style="color:white;">Orders & Questions:</h2>
      <?php
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <h4 style="color:white;">Order ID: <?=$row['order_id']?></h4>
    <h4 style="color:white;">Order Date: <?=$row['order_date']?></h4>
        <h2 style="color:white;">------</h2>
    <h4 style="color:white;">Question ID: <?=$row['question_id']?></h4>
    <h4 style="color:white;">Question: <?=$row['subject']?></h4>
            <?php }
    ?>

      <?php
        while($row = mysqli_fetch_assoc($result)) {
    ?>

            <?php }
    ?>
</body>

</html>
