<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}


if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM tapping_tips WHERE id = :id");
    $stmt->execute(['id' => $id]);
}

header("Location: tapping.php");
exit;
