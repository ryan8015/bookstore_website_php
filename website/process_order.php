<?php
session_start();
include 'conn.php';
if (isset($_SESSION['logged'])) {
} else {
    $_SESSION['logged'] = null;
}

$email = $_SESSION['logged'];
$date = date("Y-m-d");
$status = "on-going";
			
			$query="INSERT INTO `order`(`email`, `order_date`, `status`) VALUES ('$email','$date','$status')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
            header("location:placeorder.php");
?>