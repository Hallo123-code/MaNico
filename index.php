<?php

session_start();


if (isset($_SESSION['user_id']) && basename($_SERVER['PHP_SELF']) === "index.php") {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - LitMind Demo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>LitMind Demo</h1>
        <nav>
            <a href="signup.html">Sign Up</a> |
            <a href="login.html">Log In</a>
        </nav>
    </header>

    <main>
        <h2>Welcome, Guest!</h2>
        <p>This is the public home page. Please log in or sign up to access your personalized dashboard.</p>
    </main>
</body>
</html>