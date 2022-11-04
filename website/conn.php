<?php    
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "19156892";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    //check connection
    if(!$conn){
        die("System did not connect");
    }

?>