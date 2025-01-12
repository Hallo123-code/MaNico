<?php

session_start();
include 'connect.php';  


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

  
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id']  = $row['id'];
            $_SESSION['username'] = $row['username'];

        
            header("Location: ../dashboard.php");
            exit();
        } else {
            echo "Incorrect password. <a href='../login.html'>Try again</a>";
        }
    } else {
        echo "No user found with that email. <a href='../login.html'>Try again</a>";
    }

    $stmt->close();
}

$conn->close();
?>
