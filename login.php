<?php
require 'config.php'; // Database connection settings


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitize and Validate Input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password']; // Don't sanitize directly, we'll compare against the hash

    // Basic validation
    if (empty($email) || empty($password)) {
        echo "Please enter both email and password."; // Handle with better UI
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format."; // Handle with better UI
        exit;
    }

    // 2. Retrieve User Data from Database
    try {
        $stmt = $pdo->prepare("SELECT id, name, email, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch the user's data as an associative array

        if ($user) {
            // 3. Verify Password
            if (password_verify($password, $user['password'])) {
                // 4. Password is Correct!  Start a Session and Redirect
                session_start(); // Start the session
                $_SESSION['user_id'] = $user['id'];   // Store user ID in session
                $_SESSION['user_name'] = $user['name']; // Store user name
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['logged_in'] = true; //set logged_in

                // Redirect to a welcome page or dashboard
                header("Location: home.php"); //  Change to your desired page
                exit;
            } else {
                echo "Invalid password."; // Handle with better UI
                exit;
            }
        } else {
            echo "Email not found. Please register."; // Handle with better UI
            exit;
        }
    } catch (PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage(); // Don't show raw error in production
        error_log("Database Error: " . $e->getMessage());
        echo "Sorry, there was an error logging in. Please try again later.";
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
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

        .input-group {
            margin-bottom: 20px;
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

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: rgba(2, 4, 43, 0.7);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: rgba(2, 4, 43, 0.8);
        }

        .signup-text {
            text-align: center;
            margin-top: 20px;
            color: #ccc;
        }

        .signup-text a {
            color: rgb(2, 4, 44);
            text-decoration: none;
        }

        .signup-text a:hover {
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

.forgot-password {
    text-align: center;
   padding-top: 20px;
}

.forgot-password a {
    color: rgb(2, 4, 44);
    text-decoration: none;
    font-size: 14px;
}

.forgot-password a:hover {
    text-decoration: underline;
    color: rgb(2, 4, 44);
}

@media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .bg-video {
                flex-direction: column;
            }
        }


    </style>
</head>
<body>
    <a href="index.php" class="back-button">← Back</a>
    <video autoplay muted loop id="bg-video">
        <source src="31326f3208416de844f2e9c689de6031.mp4" type="video/mp4">
    </video>

<div class="login-container">
    <h2>Login</h2>
    <form action="login.php"  method="POST">
        <div class="input-group">
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-group" style="position: relative;">
            <input type="password" id="password"  name="password" placeholder="Enter your password" required>
            <span class="toggle-password" onclick="togglePassword()" title="Show/Hide Password">🙈</span>
        </div>
        <button type="submit" class="login-btn">Login</button>
        <p class="signup-text">Don't have an account? <a href="register.php">Register</a></p>

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
