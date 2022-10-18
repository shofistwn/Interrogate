<?php
    $server = "localhost";
    $user = "root";
    $password = "0374"; // hapus password jika database tidak memiliki password
    $db = "php_forum";

    $conn = mysqli_connect($server,$user,$password,$db);
    if(!$conn){
        die("Connection Failed ". mysqli_connect_error());
    }
?>

