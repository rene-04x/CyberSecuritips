<?php
require 'config.php'; // Database connection settings

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php"); // Redirect to login if not logged in
  exit;
}



$stmt = $pdo->query("SELECT q.id AS question_id, q.question, q.created_at, u.name 
                     FROM questions q
                     JOIN users u ON q.user_id = u.id
                     ORDER BY q.created_at DESC");
$questions = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CyberSecuriTips - FAQs</title>
  <link rel="icon" type="image/png" href="0cf447fa-b764-4863-8cc3-2e18a1-removebg-preview.png">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    /* (Keep all the styles from your about.html here) */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      overflow-x: hidden;
    }


    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: transparent;
      padding: 20px;
      z-index: 10;
      box-shadow: none;
    }

    .header-content {
      display: flex;
      align-items: center;
      gap: 15px;
      text-decoration: none;
      color: white;
    }

    .logo {
      height: 70px;
      margin-left: 15px;
    }

       /* Flex container for navigation */
  nav {
  display: flex;
  justify-content: space-between;  /* Space between items (logo, menu, and search) */
  align-items: center; /* Vertically align all items */
  width: 100%;
  margin-left: -5%;
  }

 

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
      padding: 0;
      margin: 10px 120px 0;
      background-color: rgba(23, 7, 59, 0.8);
      padding: 15px 15px;
      border-radius: 8px;
      transition: background-color 0.3s ease;
      border: 1px solid #f4f4f4;

    }

    nav ul li a {
      display: inline-block;
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 8px 25px;
      border-radius: 10px;
      transition: background-color 0.3s ease;
    }

    nav ul li a:hover {
      background-color: rgba(13, 24, 177, 0.8);
    }


    nav ul li a.active {
      background-color: rgba(13, 24, 177, 0.8);
    }

    .button-container {
      bottom: 20px;
      left: 70px;
      gap: 10px;
      z-index: 1;
      margin-right: 200px;
    }

    .log-out {
      background-color: transparent;
      color: #f4f4f4;
      padding: 10px 30px;
      border: 2px solid wheat;
      border-radius: 10px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
      font-size: 20px;
  writing-mode: horizontal-tb;
  white-space: nowrap;     /* Prevent line breaks */
  margin-left: -50px;
  margin-top: 20px;

    }

    .log-out:hover {
      background-color: #0d18b180;
      
    }

    .content {
      position: relative;
      margin-top: 0;
      padding: 40px 20px;
      width: 100%;
      background-color: rgb(3, 6, 39, 5);
      color: white;
      

      box-shadow: 
      20px -40px 60px 30px rgba(3, 6, 39, 1);
    }

    .img-background h2 {
      font-size: 100px;
      font-family: 'Exo 2', sans-serif;
      padding-top: 20%;
      color: rgb(255, 255, 255, 0.9);
      padding-left: 50px;
    }

    .main-section {
  display: flex;
  align-items: flex-start; /* Align items to the top */
  justify-content: center; /* Optional: center them in the container */
  padding: 20px;
  gap: 30px; /* Adds space between video and text */
  margin-top: 60px;
}


    .content p {
      font-family: 'Merriweather', serif;
  font-size: 30px;
  line-height: 1.6;
  color: #dfdcdc;
  margin-bottom: 15px;
  letter-spacing: 0.5px;
  text-align: justify;
  padding: 10px;
  margin: 0; /* Remove extra margins */
    }


.content h2 {
  position: relative;
  margin-top: 20px;
  font-size: 60px;
  font-family: 'Exo 2', sans-serif;
  left: 10%;
}


.content img {
  width: 10%;
  height: 10%;
  margin-top: 20px;
}

.about-content {
            padding: 30px 20px;
            color: #e9e5e5;
            line-height: 1.8;
            background-color: rgb(3, 6, 39, 0.05);
            margin-top: 0;
        }

        .about-content h2 {
            font-size: 48px;
            margin-bottom: 20px;
            font-family: 'Exo 2', sans-serif;
            color: #f3f3f3;
            padding-left: 20%;
        }

        .about-content p {
            font-size: 24px;
            margin-bottom: 30px;
            font-family: 'Merriweather', serif;
            color: #dfdcdc;
            text-align: justify;
        }

        .mission-vision {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .mission-vision div {
            flex: 1;
            padding: 30px;
            border-radius: 15px;
            background: rgba(30, 41, 59, 0.8);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        
            min-width: 300px;
        }

        .mission-vision div:hover {
            transform: translateY(-10px);
        }

        .mission-vision h3 {
            font-size: 30px;
            margin-bottom: 20px;
            font-family: 'Exo 2', sans-serif;
            color: #e4e7eb;
        }

        .mission-vision p {
            font-size: 24px;
            color: #f1eaea;
            font-family: 'Merriweather', serif;
            text-align: justify;
        }

        /* New style for the user-submitted questions section */
  .user-questions-container {
    flex: 1;
    padding: 30px;
    border-radius: 15px;
    background: rgba(30, 41, 59, 0.8);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
    min-width: 300px;
    margin-top: 30px; /* Add some top margin to separate it */
  }

  .user-questions-container:hover {
    transform: translateY(-10px);
  }

  .user-questions-container p {
    font-size: 18px;
    margin-bottom: 5px;
    color: #f1eaea;
    font-family: 'Merriweather', serif;
  }

  .user-questions-container small {
    color: #aaa;
    font-family: 'Merriweather', serif;
  }

  .user-questions-container p strong {
    color: #e4e7eb;
    font-family: 'Exo 2', sans-serif;
    font-size: 20px;
  }

  .user-questions-container p.no-questions {
    font-size: 20px;
    color: #f1eaea;
    text-align: center;
    font-family: 'Merriweather', serif;
  }

  .ask-question-button {
    display: inline-block; /* Allows setting width and height */
    padding: 15px 30px;
    background-color: #0d18b1; /* Use a primary color */
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s ease, transform 0.2s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .ask-question-button:hover {
    background-color: #0a127a; /* Darker shade for hover */
    transform: translateY(-2px); /* Slight lift on hover */
  }

  .ask-question-button:active {
    transform: translateY(0); /* Press effect */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  }

        @media (max-width: 768px) {
            .mission-vision {
                flex-direction: column;
            }

            nav ul {
                flex-direction: column;
                text-align: center;
            }

        }


  /* Style for individual question blocks to match mission-vision */
  .question-block {
    flex: 1; /* Take up available space */
    padding: 30px; /* Match padding */
    margin-bottom: 30px; /* Space between question blocks */
    border-radius: 15px; /* Match border-radius */
    background: rgba(30, 41, 59, 0.8); /* Match background */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Match box-shadow */
    color: #f1eaea;
    font-family: 'Merriweather', serif;
    min-width: 300px; /* Ensure a minimum width */
    transition: transform 0.3s ease; /* Add hover transition */
  }

  .question-block:hover {
    transform: translateY(-10px); /* Add hover effect */
  }

  .question-block p strong {
    color: #e4e7eb;
    font-family: 'Exo 2', sans-serif;
    font-size: 20px;
    display: block; /* Make the strong tag a block for spacing */
    margin-bottom: 10px; /* Add space below the question */
  }

  .question-block small {
    color: #aaa;
    font-family: 'Merriweather', serif;
    display: block; /* Make small elements appear on their own line */
    margin-top: 5px;
    margin-bottom: 15px; /* Add space below the metadata */
  }

  .question-block p.no-answers {
    color: #aaa;
    margin-left: 0; /* Reset left margin */
    margin-top: 10px;
  }

  .question-block p.answer-label {
    font-weight: bold;
    color: #e4e7eb;
    margin-top: 15px;
    margin-left: 0;
  }

  .question-block p.answer-text {
    margin-left: 20px;
    margin-bottom: 10px;
  }

  .question-block small.answer-meta {
    margin-left: 20px;
    display: block;
    margin-bottom: 15px;
  }

  /* Adjustments for the "Answer this Question" button within the block */
  .question-block div[style*="text-align:center"] {
    margin-top: 20px; /* Add more space above the button */
  }

  /* Remove the hr tag if you don't want the horizontal line */
  .user-questions-container hr {
    display: none;
  }


  </style>
</head>
<body>


  <header>
    <div class="header-content">
      <a href="home.php" class="header-content">
        <img src="0cf447fa-b764-4863-8cc3-2e18b72e18a1-removebg-preview.png" alt="Site Logo" class="logo">
        <h1>CyberSecuriTips</h1>
      </a>
      
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="topics.php">Topics</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="faqs.php"  class="active">FAQS</a></li>
          </ul>
          <div class="button-container">
            <button type="button" class="log-out" onclick="window.location.href='logout.php'">log-out</button>
          </div>
        </nav>
    </div>
  </header>

  <main class="content">
    <section>
      <div class="main-section">
            <div class="about-content">
                           <h2 style="padding-left: 15%;">Frequently Asked Questions</h2>
                           <p style="text-align: center;">
                               Find answers to common questions about cybersecurity and how to stay safe online.
                           </p>

                           <div class="mission-vision">
                               <div>
                                   <h3 style="padding-top: 30px;text-align: center;">What is Cybersecurity?</h3>
                                   <p style="padding-top: 30px;">
                                       Cybersecurity is the practice of protecting computer systems, networks, and digital data from malicious attacks, damage, or unauthorized access.  It involves various techniques and technologies to ensure confidentiality, integrity, and availability of information.
                                   </p>
                               </div>
                               <div>
                                   <h3 style="text-align: center;">Why is Cybersecurity Important?</h3>
                                   <p>
                                       Cybersecurity is crucial because it helps protect sensitive data (like personal information, financial details, and intellectual property) from theft, damage, and disruption.  In today's digital world, where we rely heavily on technology, strong cybersecurity is essential for individuals, businesses, and governments alike.
                                   </p>
                               </div>
                           </div>

                           <div class="mission-vision">
                            <div>
                                <h3 style="text-align: center;">What are common types of cyber threats?</h3>
                                <p>
                                    Common threats include:
                                    <ul style="padding-left: 20px;">
                                        <li><b>Phishing:</b> Deceptive attempts to obtain sensitive information (usernames, passwords, credit card details) by disguising as a trustworthy entity.</li><br>
                                        <li><b>Malware:</b> Malicious software (viruses, worms, ransomware) designed to damage or disable computer systems.</li><br>
                                        <li><b>Ransomware:</b> A type of malware that encrypts a victim's data and demands payment for its release.</li><br>
                                        <li><b>Denial-of-Service (DoS) Attacks:</b> Overwhelming a server with traffic to make it unavailable.</li><br>
                                        <li><b>SQL Injection:</b>  An attack that exploits vulnerabilities in databases to gain unauthorized access.</li><br>
                                    </ul>
                                </p>
                            </div>
                            <div>
                                <h3 style="text-align: center;">How can I protect myself online?</h3>
                                <p>
                                    Here are some key steps:
                                    <ul style="padding-top: 20px; padding-left: 20px;">
                                        <li>Use strong, unique passwords for all accounts.</li><br>
                                        <li>Enable two-factor authentication (2FA) whenever possible.</li><br>
                                        <li>Keep software and operating systems updated.</li><br>
                                        <li>Be cautious of suspicious emails, links, and attachments.</li><br>
                                        <li>Install and maintain reputable antivirus software.</li><br>
                                        <li>Back up your important data regularly.</li><br>
                                        <li>Use a firewall.</li><br>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <div class="mission-vision">
                            <div>
                                <h3 style="text-align: center;">What is two-factor authentication (2FA)?</h3>
                                <p style="padding-top: 30px;">
                                    2FA adds an extra layer of security by requiring two forms of identification to access an account.  Typically, this involves something you know (your password) and something you have (a code from your phone or a security key).
                                </p>
                            </div>
                            <div>
                                <h3 style="text-align: center;">Where can I learn more about cybersecurity?</h3>
                                <p>
                                    This website (CyberSecuriTips!) is a great starting point.  We also recommend checking out resources from organizations like:
                                    <ul style="padding-left: 20px;">
                                        <li>National Institute of Standards and Technology (NIST)</li>
                                        <li>Open Web Application Security Project (OWASP)</li>
                                        <li>Your local government's cybersecurity agency</li>
                                    </ul>
                                </p>
                            </div>
      </div>
      <div class="user-questions-container">
  <?php if (!empty($questions)): ?>
    <?php foreach ($questions as $q): ?>
      <div class="question-block">
        <p><strong>Q:</strong> <?= htmlspecialchars($q['question']) ?></p>
        <small>Asked by <?= htmlspecialchars($q['name']) ?> on <?= date("F j, Y, g:i a", strtotime($q['created_at'])) ?></small>

        <?php
        $answerStmt = $pdo->prepare("SELECT a.answer, a.created_at, u.name FROM answers a
                                     JOIN users u ON a.user_id = u.id
                                     WHERE a.question_id = ?
                                     ORDER BY a.created_at ASC");
        $answerStmt->execute([$q['question_id']]); 
        $answers = $answerStmt->fetchAll();
        ?>

        <?php if ($answers): ?>
          <?php foreach ($answers as $a): ?>
            <p style="margin-left: 20px;"><strong>A:</strong> <?= htmlspecialchars($a['answer']) ?></p>
            <small style="margin-left: 20px;">Answered by <?= htmlspecialchars($a['name']) ?> on <?= date("F j, Y, g:i a", strtotime($a['created_at'])) ?></small>
          <?php endforeach; ?>
        <?php else: ?>
          <p style="margin-left: 20px;">No answers yet.</p>
        <?php endif; ?>

        <div style="text-align:center; margin-top:10px;">
        <a href="answer_question.php?question_id=<?= htmlspecialchars($q['question_id']) ?>" class="ask-question-button">Answer this Question</a>

        </div>
      </div>
      <hr>
    <?php endforeach; ?>
  <?php else: ?>
    <p class="no-questions">No questions have been submitted yet.</p>
  <?php endif; ?>
</div>

<div style="text-align:center; margin-top:20px;">
  <a href="ask_question.php" class="ask-question-button">Click here to ask a question</a>
</div>


      </div>
    </section>
  </main>
  <footer style="
  background-color: rgb(11, 15, 59);
  color: white;
  padding: 30px 20px;
  text-align: center;
  font-family: 'Merriweather', serif;
  margin-top: 0;

  
">
  <div style="max-width: 1000px; margin: auto;">
    <h3 style="font-family: 'Exo 2', sans-serif; margin-bottom: 15px;">CyberSecuriTips</h3>
    <p style="margin-bottom: 20px;">Stay informed. Stay protected. Learn more about cybersecurity threats and how to defend against them.</p>

    <div style="margin-bottom: 20px;">
      <a href="home.php" style="color: #ccc; margin: 0 10px; text-decoration: none;">Home</a> |
      <a href="topics.php" style="color: #ccc; margin: 0 10px; text-decoration: none;">Topics</a> |
      <a href="resources.php" style="color: #ccc; margin: 0 10px; text-decoration: none;">Resources</a> |
      <a href="about.php" style="color: #ccc; margin: 0 10px; text-decoration: none;">About</a> |
      <a href="faqs.php" style="color: #ccc; margin: 0 10px; text-decoration: none;">FAQS</a> |
    </div>

    <p style="margin-top: 20px; font-size: 14px; color: #aaa;">&copy; 2025 CyberSecuriTips. All rights reserved.</p>
  </div>
</footer>


<script>
document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('#mainNav a');
  const currentPath = window.location.pathname; // Gets the current page's path (e.g., /about.html)

  navLinks.forEach(link => {
    const linkPath = new URL(link.href, window.location.origin).pathname; // Ensure full path for comparison

    if (linkPath === currentPath) {
      link.classList.add('active');
    } else {
      link.classList.remove('active'); // Remove if it was previously active
    }
  });
});
</script>

</body>
</html>