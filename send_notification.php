<?php
include_once("config/connection.php");

if (!isset($_SESSION['user_id']) || !isset($_GET['friend_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$friend_id = $_GET['friend_id'];

// Insert into the friends table to send a notification
$sql = "INSERT INTO friends (user_id, friend_id, status) VALUES ('$user_id', '$friend_id', 'pending')";
if (mysqli_query($conn, $sql)) {
    echo '<script>
        alert("Notification sent successfully!");
        window.location.href = "index.php";
    </script>';
} else {
    echo '<script>
        alert("Failed to send notification.");
        window.location.href = "index.php";
    </script>';
}
?>
