<?php
session_start();
require 'config.php'; // Assumes this sets up a $pdo connection

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}


if (isset($_POST['submit_question']) && !empty($_POST['question']) && isset($_SESSION['user_id'])) {
    $question = trim($_POST['question']);
    $user_id = $_SESSION['user_id'];

    try {
        $stmt = $pdo->prepare("INSERT INTO questions (user_id, question) VALUES (:user_id, :question)");
        $stmt->execute([
            ':user_id' => $user_id,
            ':question' => $question
        ]);

        header("Location: faqs.php");
        exit;
    } catch (PDOException $e) {
        // Optional: log $e->getMessage() to file or error log
        echo "Error submitting question. Please try again later.";
    }
} else {
    echo "Please log in and fill in the question.";
}
?>
