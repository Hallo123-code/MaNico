<?php

session_start();
include 'connect.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
      
        header("Location: ../login.html?signup=success");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
