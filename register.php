<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';
require 'config.php'; // Database connection settings

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Validate CAPTCHA
    $recaptcha_secret = "6LfWDe4qAAAAANLRX88uKVDGEmvQsTDcH9A2L14A";
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Make the request to Google's reCAPTCHA verification server
    $verify_url = "https://www.google.com/recaptcha/api/siteverify";
    $response = file_get_contents($verify_url . "?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response);
    $response_keys = json_decode($response, true);

    if (intval($response_keys["success"]) !== 1) {
        // If CAPTCHA is not successful, show an alert
        $message = "Please complete the CAPTCHA.";
        echo "<script>
        alert('$message');
        </script>";
    } else {
        // CAPTCHA successful, proceed with form submission

        // Check if form fields are set and not empty
        if (isset($_POST['name'], $_POST['email'], $_POST['password']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

            // Sanitize and assign the form data
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password

            // Generate a verification token
            $token = bin2hex(random_bytes(50));

            // Save user data with verification status as 0 (not verified)
            try {
                $stmt = $pdo->prepare("INSERT INTO users (name, email, password, token, verified) VALUES (?, ?, ?, ?, 0)");
                $stmt->execute([$name, $email, $password, $token]);

                // Send the verification email using PHPMailer
                $verificationLink = "http://localhost/register/verify.php?email=$email&token=$token";
        
                $mail = new PHPMailer(true);
                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to send through
                    $mail->SMTPAuth = true;
                    $mail->Username = 'ireneespeleta2005@gmail.com'; // SMTP username
                    $mail->Password = 'dmbk cygf dgts qmbk';   // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;

                    // Recipients
                    $mail->setFrom('ireneespeleta2005@gmail.com', 'Your Company');
                    $mail->addAddress($email); // Add recipient

                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = 'Verify Your Email Address';
                    $mail->Body    = "Click the following link to verify your email: <a href='$verificationLink'>$verificationLink</a>";

                    $mail->send();
                    $message = 'Registration successful! Please check your email to verify your account.';
                    echo "<script>
                    alert('$message');
                    </script>";

                } catch (Exception $e) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }

            } catch (Exception $e) {
                echo "Error: Unable to register. Please try again.";
            }
        } else {
            // If any required field is missing
            echo "<script>
            alert('All fields are required!');
            </script>";
        }
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
        rgba(2, 4, 43, 0.95),     /* Deep navy */
        rgba(72, 61, 139, 0.8),   /* Slate blue */
        rgba(127, 129, 155, 0.5)  /* Muted lavender-gray */
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
    z-index: -1; /* Put it behind everything */
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
    position: absolute;   /* Ensures the button stays at the top left of the screen */
    top: 20px;            /* Space from the top */
    left: 20px;           /* Space from the left */
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
    <a href="index.html" class="back-button">← Back</a>
    <video autoplay muted loop id="bg-video">
        <source src="31326f3208416de844f2e9c689de6031.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container">
    
        <div class="form-container" id="register-form">
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <div class="input-group">
                <input type="text" placeholder="Name" required>
                </div>
                <div class="input-group">
                    <input type="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group" style="position: relative;">
                    <input type="password" id="password" placeholder="Enter your password" required>
                    <span class="toggle-password" onclick="togglePassword()" title="Show/Hide Password">🙈</span>
                </div>
                <button type="submit">Register</button>
                <p>Already have an account? <a href="login.html">Login</a></p>
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
    
</body>
</html>
