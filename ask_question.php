<?php
require 'config.php'; // Make sure this creates a $pdo PDO connection

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Safety Tip</title>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Merriweather', serif;
        background-color: #e0f2f7;
        color: #e0f7fa;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        padding: 20px;
        box-sizing: border-box;
        background-color: rgba(30, 41, 59, 0.8);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .container {
        background-color: rgba(30, 41, 59, 0.8);
        color: #e0f7fa;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        width: 90%;
        max-width: 600px;
        text-align: center;
    }

    h2 {
        font-family: 'Exo 2', sans-serif;
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #e0f7fa;
    }

    p {
        margin-top: 10px;
        font-size: 1.1em;
    }

    p.error {
        color: #ffdddd;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: stretch;
    }

    label {
        font-size: 1.2em;
        margin-bottom: 8px;
        text-align: left;
        color: #b0bec5;
    }

    textarea,
    select {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #b0bec5;
        border-radius: 8px;
        font-family: inherit;
        font-size: 1em;
        background-color: #eceff1;
        color: #333;
    }

    select {
        appearance: none;
        -webkit-appearance: none;
        background-image: url('data:image/svg+xml;charset=UTF-8,<svg fill="%2378909c" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 10px center;
        background-size: 1.5em;
    }

    button[type="submit"] {
        background-color:rgb(3, 68, 99); /* A brighter blue, similar to your link color */
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1.1em;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color:rgb(5, 57, 168); /* A slightly darker shade on hover */
    }

    a {
        color: #b3e5fc;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #81d4fa;
    }
</style>
</head>
<body>
<div class="container">
<h2 style="text-align:center;">Ask a Cybersecurity Question</h2>

  <form action="submit_question.php" method="post" style="max-width:600px; margin:auto;">
    <textarea name="question" rows="4" required placeholder="Type your question here..." style="width:100%; padding:10px; font-size:16px;"></textarea>
    <button type="submit" name="submit_question" style="margin-top:10px; padding:10px 20px; font-size:18px; background-color:#0d18b1; color:white; border:none; border-radius:8px;">Submit Question</button>
  </form>
    </div>
</body>
</html>