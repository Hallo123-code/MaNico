<?php
session_start();
if (!isset($_SESSION['user_id'])) {

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Practice Quiz - LitMind Demo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Practice Quiz</h1>

    <div id="quizContainer">
        <div class="quizItem">
            <p><strong>Question:</strong> Who is the main protagonist of 1984?</p>
            <button class="showAnswerBtn">Show Answer</button>
            <p class="answer" style="display:none;">Answer: Winston Smith</p>
        </div>

        <div class="quizItem">
            <p><strong>Question:</strong> Which concept involves the government creating a new language?</p>
            <button class="showAnswerBtn">Show Answer</button>
            <p class="answer" style="display:none;">Answer: Newspeak</p>
        </div>


    </div>

    <footer>
        <a href="dashboard.php">Back to Dashboard</a>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
