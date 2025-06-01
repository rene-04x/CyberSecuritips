
<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}


if (!isset($_GET['id'])) {
    header("Location: pirating.php");
    exit;
}

$id = (int)$_GET['id'];
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tip = trim($_POST['userTip']);
    if (!empty($tip)) {
        $sql = "UPDATE pirating_tips SET tip_text = :tip WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute(['tip' => $tip, 'id' => $id])) {
            header("Location: pirating.php");
            exit;
        } else {
            $error = "Error updating tip.";
        }
    } else {
        $error = "Tip cannot be empty.";
    }
} else {
    // Get existing tip
    $stmt = $pdo->prepare("SELECT tip_text FROM pirating_tips WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $tip = $stmt->fetchColumn();
    if ($tip === false) {
        header("Location: pirating.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Safety Tip</title>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Merriweather', serif;
        background-color: #e0f2f7;
        color: #0c3043;
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

    textarea {
        padding: 12px;
        margin-bottom: 25px;
        border: 1px solid #b0bec5;
        border-radius: 8px;
        font-family: inherit;
        font-size: 1em;
        background-color: #e0f7fa;
        color: #0c3043;
        resize: vertical;
        min-height: 100px;
    }

    button[type="submit"] {
        background-color: #ff6f61;
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
        background-color: #e53935;
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
        <h2>Edit Safety Tip</h2>

        <?php if ($error) {
            echo "<p class='error'>$error</p>";
        } ?>

        <form method="POST" action="">
            <label for="userTip">Your Safety Tip:</label><br>
            <textarea id="userTip" name="userTip" rows="5" cols="50" required><?php echo htmlspecialchars($tip); ?></textarea><br><br>
            <button type="submit">Update Tip</button>
        </form><br>

        <p><a href="pirating.php">Back to Safety Tips</a></p>
    </div>
</body>
</html>
