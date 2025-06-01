<?php
require 'config.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page or display an error
    header("Location: login.php"); // Replace 'login.php' with your actual login page URL
    exit(); // Ensure that the script stops execution after the redirect
  }

if (!isset($_SESSION['user_id'])) {
    // User must be logged in to answer
    die("<div style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); text-align: center;'>
            <h2 style='color: #d32f2f;'>Authentication Required</h2>
            <p>Please <a href='login.php' style='color: #1976d2; text-decoration: none;'>log in</a> to submit an answer.</p>
         </div>");
}

$question_id = $_GET['question_id'] ?? null;

if (!$question_id) {
    die("<div style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); text-align: center;'>
            <h2 style='color: #d32f2f;'>Error</h2>
            <p>Question ID is missing.</p>
         </div>");
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = trim($_POST['answer']);

    if (empty($answer)) {
        echo "<div style='font-family: Arial, sans-serif; background-color: #ffebee; color: #d32f2f; padding: 10px; border-radius: 4px; margin-bottom: 10px;'>Please enter your answer.</div>";
    } else {
        // Check if current user is the one who posted the question
        $stmt = $pdo->prepare("SELECT user_id FROM questions WHERE id = ?");
        $stmt->execute([$question_id]);
        $question = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$question) {
            die("<div style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); text-align: center;'>
                    <h2 style='color: #d32f2f;'>Error</h2>
                    <p>Question not found.</p>
                 </div>");
        }

        if ($question['user_id'] == $user_id) {
            // Show alert and prevent answer submission
            echo "<script>alert('You cannot answer your own question.'); window.history.back();</script>";
            exit;
        }

        // Insert the answer since user is not the question owner
        $stmt = $pdo->prepare("INSERT INTO answers (question_id, user_id, answer, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$question_id, $user_id, $answer]);

        header("Location: faqs.php");
        exit;
    }
}

// Fetch the question to display it for context
$stmt = $pdo->prepare("SELECT question FROM questions WHERE id = ?");
$stmt->execute([$question_id]);
$questionDetails = $stmt->fetch(PDO::FETCH_ASSOC);
$questionText = htmlspecialchars($questionDetails['question'] ?? 'Question not found');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer Question - CyberSecuriTips</title>
    <link rel="icon" type="image/png" href="0cf447fa-b764-4863-8cc3-2e18a1-removebg-preview.png">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Merriweather', serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .answer-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 700px;
            text-align: left;
        }

        h2 {
            font-family: 'Exo 2', sans-serif;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            line-height: 1.6;
            color: #555;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-family: 'Merriweather', serif;
            font-size: 16px;
            resize: vertical;
        }

        button[type="submit"] {
            background-color: #0d18b1;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0a127a;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            color: #1976d2;
            text-decoration: none;
            font-size: 16px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .question-context {
            background-color: #e0f7fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #b2ebf2;
            color: #00695c;
            font-size: 16px;
        }

        .question-context strong {
            font-weight: bold;
            color: #004d40;
        }
    </style>
</head>
<body>
    <div class="answer-container">
        <h2>Answer this Question</h2>
        <div class="question-context">
            <strong>Question:</strong> <?= $questionText ?>
        </div>
        <form method="POST">
            <label for="answer">Your Answer:</label>
            <textarea name="answer" rows="7" required></textarea><br>
            <button type="submit">Post Answer</button>
        </form>
        <a href="faqs.php" class="back-link">Back to FAQs</a>
    </div>
</body>
</html>