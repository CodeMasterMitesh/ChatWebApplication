<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    // print_r(__DIR__);
    $currentDirectory = dirname(__FILE__);
    if (file_exists($currentDirectory.'/../vendor/autoload.php')) {
        require_once $currentDirectory.'/../vendor/autoload.php';
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->load();
    }
    // $host = $_ENV['DB_HOST'];
    // $username = $_ENV['DB_USERNAME'];
    // $password = $_ENV['DB_PASSWORD'];
    // $db = $_ENV['DB_DATABASE'];

    $conn = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD'],$_ENV['DB_DATABASE']) or die("login failed");
    if(!$conn){
        echo "Database Connection Failed";
    }

    // if($conn)
    // {
    //     echo "Connect Sucessfully";
    // }

    function debug($std){
        echo "<pre>";
        print_r($std);
        echo "</pre>";
    }
?>