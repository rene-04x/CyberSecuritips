<?php
require 'config.php'; // Database connection settings

function getClientIp() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['FORWARDED_FOR']))
        $ipaddress = $_SERVER['FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

// Updated disposable email check with ends-with logic
function isDisposableEmail($email) {
    $disposableDomains = [
        'yopmail.com', 'guerrillamail.com', 'mailinator.com', 'maildrop.cc',
        'trashmail.com', 'tempmail.io', 'dispostable.com', 'fakeemail.net',
        'tempmail.net', 'anonbox.net', 'spambox.us', 'tempomail.fr',
        'mail.tm', 'getnada.com', 'dropmail.me', 'generator.email',
        'wwwnew.eu', 'safetymail.info', '10minutemail.com', 'pokemail.com',
        'spam.su', 'lhsdv.com', 'mailcatch.com', 'incognitomail.org',
        'mytrashmail.com', 'dodgit.com', 'binkmail.com', 'filzmail.com',
        'suremail.info', 'eyepaste.com', 'superrito.com', 'slopsbox.com',
        'soodonims.com', 'zippymail.in', 'fudgerub.com', 'haltospam.com',
        '0clickemail.com', 'jafps.com', 'uroid.com', 'rcpt.at', 'yopmail.fr',
        'yopmail.net', 'cool.fr.nf', 'jetable.org', 'nospam.mail.pl',
        'veryrealemail.com', 'discardmail.com', 'vmani.com', 'amail.club',
        'boxom.eu', 'cachedmail.com', 'inboxproxy.com', 'mbe.kr', 'mintemail.com',
        'sendspamhere.com', 'telegroup.top', 'xoxox.cc', 'yopweb.com', 'zxcvbnm.in'
    ];

    $domain = strtolower(trim(substr(strrchr($email, "@"), 1)));

    foreach ($disposableDomains as $disposable) {
        if (str_ends_with($domain, $disposable)) {
            return true;
        }
    }
    return false;
}

// Rate limiting
$client_ip = getClientIp();
$today_start = strtotime("today");
$today_end = strtotime("tomorrow");

$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE ip_address = ? AND created_at >= ? AND created_at < ?");
$stmt->execute([$client_ip, $today_start, $today_end]);
$registration_count = $stmt->fetchColumn();

if ($registration_count >= 3) {
    echo "<script>alert('Maximum registrations per day reached.'); window.location.href='register.php';</script>";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password)) {
        echo "<script>alert('Please fill in all fields.'); window.location.href='register.php';</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.'); window.location.href='register.php';</script>";
        exit;
    }

    if (isDisposableEmail($email)) {
        echo "<script>alert('Disposable email addresses are not allowed.'); window.location.href='register.php';</script>";
        exit;
    }

    if (strlen($password) < 8) {
        echo "<script>alert('Password must be at least 8 characters long.'); window.location.href='register.php';</script>";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $email_exists = $stmt->fetchColumn();

    if ($email_exists) {
        echo "<script>alert('Email already exists. Please use a different email.'); window.location.href='register.php';</script>";
        exit;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, ip_address, created_at) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $hashed_password, $client_ip, time()]);

        header("Location: login.php");
        exit;

    } catch (PDOException $e) {
        error_log("Database Error: " . $e->getMessage());
        echo "<script>alert('Sorry, there was an error registering your account. Please try again later.'); window.location.href='register.php';</script>";
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: linear-gradient(
                135deg,
                rgba(2, 4, 43, 0.95),      /* Deep navy */
                rgba(72, 61, 139, 0.8),      /* Slate blue */
                rgba(127, 129, 155, 0.5)     /* Muted lavender-gray */
            );
            padding: 40px;
            width: 400px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.9);
            border-radius: 12px;
            border: 1px solid rgba(72, 61, 139, 0.9),  ;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #cccccc;
        }

        .form-container {
            display: flex;
            flex-direction: column;
        }

        form input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 10px 0;
        }

        .input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        form button {
            width: 100%;
            padding: 12px;
            background-color: rgba(2, 4, 43, 0.7);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        form button:hover {
            background-color: rgba(2, 4, 43, 0.8);
        }

        form p {
            text-align: center;
            margin-top: 20px;
            color: #ccc;
        }

        form p a {
            color: rgb(2, 4, 44);
            text-decoration: none;
        }

        form p a:hover {
            text-decoration: underline;
        }

        #bg-video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: -1;
            /* Put it behind everything */
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #888;
            user-select: none;
        }

        .input-group {
            margin-bottom: 3px;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: transparent;
        }

        .input-group input:focus {
            border-color: rgba(2, 4, 43, 1);
            outline: none;
        }

        .back-button {
            position: absolute;
            /* Ensures the button stays at the top left of the screen */
            top: 20px;
            /* Space from the top */
            left: 20px;
            /* Space from the left */
            color: #ccc;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.2s;
        }

        .back-button:hover {
            color: rgb(235, 219, 219);
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .bg-video {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-button">← Back</a>
    <video autoplay muted loop id="bg-video">
        <source src="31326f3208416de844f2e9c689de6031.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">

        <div class="form-container" id="register-form">
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <div class="input-group">
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group" style="position: relative;">
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <span class="toggle-password" onclick="togglePassword()" title="Show/Hide Password">🙈</span>
                </div>
                <button type="submit">Register</button>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>

        <script>
            function togglePassword() {
                const passwordInput = document.getElementById("password");
                const toggleIcon = document.querySelector(".toggle-password");
                const isPassword = passwordInput.type === "password";

                passwordInput.type = isPassword ? "text" : "password";
                toggleIcon.textContent = isPassword ? "🙉" : "🙈";
            }

            // Ensure the icon is 🙈 on page load
            document.addEventListener("DOMContentLoaded", () => {
                document.getElementById("password").type = "password";
                document.querySelector(".toggle-password").textContent = "🙈";
            });
        </script>
    </div>
</body>
</html>
