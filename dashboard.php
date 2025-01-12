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
    <title>Dashboard - LitMind Demo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="dashboard-container">

    <aside class="sidebar">
        <h2>My Tools</h2>
        <ul>
            <li><a href="quiz.php">Practice Quiz</a></li>
            <li><a href="#">Flashcards</a></li>
        </ul>
    </aside>

    <main class="main-content">
        <h2>General Information About the Book</h2>
        <p>
            Here you can include summaries, chapters, or any other relevant information
            about the book you're currently reading or studying. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Fusce imperdiet mi eu neque cursus congue.
        </p>
       
    </main>

 
    <section class="assistant">
        <h2>Assistant</h2>
        <p>This can handle text or voice input (front-end only for now).</p>

        <div class="assistant-input">
            <label for="assistantText">Text Input:</label>
            <textarea id="assistantText" rows="4" cols="30" placeholder="Type your message here..."></textarea>
        </div>

        <div class="assistant-voice">
            <label for="assistantVoice">Voice Input (not functional yet):</label>
            <button id="assistantVoice">Start Recording</button>
        </div>
    </section>
</div>

<footer class="dashboard-footer">
    <nav>
        <a href="php/logout.php">Log Out</a>
    </nav>
</footer>

</body>
</html>
