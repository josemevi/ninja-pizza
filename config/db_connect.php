<?php 

    //MYSQLi and PDO
    //connect db (mysqli)
    $conn = mysqli_connect('localhost','admin','masterkey','ninja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>