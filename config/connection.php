<?php 

    $host = "localhost";
    $username = "root";
    $db = "";
    $password = "";

    $conn = mysqli_connect($host,$username,$db,$password);

    if($conn)
    {
        echo "Connect Sucessfully";
    }
?>