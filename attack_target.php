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
  <title>CyberSecuriTips</title>
  <link rel="icon" type="image/png" href="0cf447fa-b764-4863-8cc3-2e18b72e18a1-removebg-preview.png">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



  
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
      flex-direction: column;
      min-height: 100vh;
      overflow-x: hidden;
    }

    .img-background {
  position: relative;
  width: 100%; /* Adjust as needed */
  height: 100vh; /* Full screen height */
  overflow: hidden;
  z-index: 0;
  background-image: url('Protect Your Devices, Protect Your Data!.jpg'); /* Set the image as a background */
  background-size: cover; /* Scale to cover the container */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Prevent tiling if there's empty space */
  
}

.img-background img {
  display: none; /* Hide the <img> tag since the background-image is used */
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

    .content h2 {
      font-size: 70px;
      font-family: 'Exo 2', sans-serif;
      padding-left: 12%;
    }


    .content p {
  font-family: 'Merriweather', serif;
  font-size: 20px;
  line-height: 1.6;
  color: #dfdcdc;
  margin-bottom: 15px;
  letter-spacing: 0.5px;
  text-align: justify;
  padding: 10px;
  margin-top: 50px; /* Remove extra margins */
  text-indent: 30px;
    }

    .content ul {
  list-style-type: disc; /* Or 'circle', 'square', 'none' */
  padding-left: 20px; /* Add left padding for the bullet indentation */
  margin-bottom: 15px; /* Add space below the list */
  
}

.content ul li {
  margin-bottom: 5px; /* Add space between list items */
  line-height: 1.5;  /* Improve line height for readability */
  color: #dfdcdc;
  font-size: 20px;
  font-family: 'Merriweather', serif;
}

/* Optional styling -  for a more modern look */
.content ul {
    padding-left: 60px; /* Increase padding-left to accommodate the border */
}

.content ul li::marker {
  color: #a0aec0; /* Change bullet color */
}

.content ul li {
    padding-left: 0.5em; /* Add some padding to the left of the text */
    text-indent: -0.5em; /* Remove the default indentation */
}


.flex-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 20px; /* spacing between boxes */
  padding: 20px;

}

.content h1 {
  position: relative;
  margin-top: 20px;
  font-size: 60px;
  font-family: 'Exo 2', sans-serif;
  left: 2%;
}

.flex-box {
  display: flex;
  flex-direction: column; /* Stack children vertically */
  justify-content: space-between; /* Space out children (optional) */
  min-height: 100%; /* Make sure they stretch equally */
  background-color: none;
  color: white;
  padding: 20px;
  border-radius: 10px;
  border: 1px solid #dfdcdc;
  cursor: pointer;
  opacity: 0.8;
  flex: 0 1 calc(33.333% - 20px); /* 3 per row with spacing */
  box-sizing: border-box;
  margin-bottom: 20px; /* spacing between rows */
  
}


.flex-box h2 {
  font-family: 'Exo 2', sans-serif;
  font-size: 30px;
  margin-top: 15px;

}

.flex-box img {
  height: 300px;
  width: 300px;
  border-radius: 10px;
  display: block;
  margin: 0 auto;
  padding-top: 20px;

}

.flex-box p {
  text-align: justify;
  text-justify: inter-word;
  hyphens: auto;
  word-spacing: normal;
  margin-top: 10px;
  padding: 0 18px;
  font-size: 18px;
  color: #dfdcdc;
  letter-spacing: 0.3px;
  line-height: 1.5;
  max-width: 90%;
  margin-left: auto;
  margin-right: auto;
  padding-top: 10px;
}

.flex-box:hover img {
  transform: scale(1.05);
  filter: brightness(1.1);
  transition: transform 0.3s ease, filter 0.3s ease;

}

.flex-box:hover {
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
  transition: box-shadow 0.3s ease;
  opacity: 1;
}

.flex-container a {
  text-decoration: none;
  flex: 2; /* Make all boxes equal in width */
}

.flex-box h2 i {
  transition: transform 0.3s ease;
}

.flex-box:hover h2 i {
  transform: translateX(5px);
}

.step-container {
        padding: 30px;
        border-radius: 15px;
        width: 95%;
        margin: 20px auto;
        background: rgba(30, 41, 59, 0.8); /* Darker, semi-transparent background */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* More pronounced shadow */
        margin-bottom: 90px;
    }

    .step {
        display: flex;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        background: linear-gradient(145deg, rgba(35, 59, 99, 0.7), rgba(25, 42, 71, 0.7));
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2),
                    -5px -5px 10px rgba(51, 91, 153, 0.2);
        transition: box-shadow 0.3s ease;
    }

    .step:last-child {
        margin-bottom: 0;
    }

    .step-content {
        flex-grow: 1;
        padding-left: 20px;
    }

    .number-circle {
        margin-top: 30px;
        box-shadow: 3px 3px 7px #2861a0,
                    -3px -3px 7px #52b5ff;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        line-height: 50px;
        padding-top: 5px;
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        margin-right: 20px;
    }

    .step-title {
        font-size: 22px;
        font-weight: bold;
        color: #e0f7fa;
        margin-bottom: 8px;
        font-family: 'Exo 2', sans-serif;
        justify-self: center;
    }

    .step-description {
        font-size: 18px;
        line-height: 1.6;
        color: #b0bec5;
    }

    @media (max-width: 768px) {
            .main-section {
                flex-direction: column;
            }

            nav ul {
                flex-direction: column;
                text-align: center;
            }

            .button-container {
              flex-direction: column;
            }

        }


/* Updated Add Tip Button Styling */
#addTipButtonContainer {
  text-align: center;
  margin-bottom: 90px;
  justify-self:center;
 
}

#addTipButton {
  background-color: rgba(30, 41, 59, 0.9); /* Darker, semi-transparent background */
  color: #e0f7fa; /* Light cyan/blue text */
  padding: 12px 30px;
  border: 1px solid #e0f7fa; /* Subtle border */
  border-radius: 8px;
  cursor: pointer;
  font-size: 18px;
  font-weight: bold;
  transition: background-color 0.3s ease, transform 0.2s ease, border-color 0.3s ease;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
}

#addTipButton:hover {
  background-color: rgba(51, 71, 113, 0.9); /* Slightly lighter dark blue */
  border-color: rgb(3, 39, 56); 
  transform: translateY(-2px);
  box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
}

#addTipButton:active {
  background-color: rgba(23, 32, 58, 0.9); /* Even darker blue */
  transform: translateY(0);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);
}

/* Updated Edit and Delete Buttons Styling */
.step button {
  background-color: rgba(51, 71, 113, 0.8); /* Dark blue, slightly transparent */
  color: #b3e5fc; /* Light blue text */
  padding: 8px 15px;
  border: 1px solid #b3e5fc; /* Subtle border */
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease, transform 0.2s ease, border-color 0.3s ease;
  margin-right: 5px;
}

.step button:last-child {
  background-color: rgba(23, 32, 58, 0.9); /* Even darker blue */
  color: #ffdddd; /* Light red text */
  border-color: #ffdddd; /* Subtle border */
}

.step button:hover {
  background-color: rgba(84, 110, 153, 0.9); /* Lighter dark blue/red */
  border-color:rgb(3, 39, 56); 
  transform: translateY(-1px);
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.step button:active {
  background-color: rgba(38, 50, 75, 0.9); /* Even darker blue/red */
  transform: translateY(0);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
}

.step div[style*="margin-top:5px;"] { /* Target the div containing the buttons */
  display: flex;
  gap: 5px; /* Adjust the spacing between buttons */
  justify-content: flex-end; /* Align buttons to the right */
  margin-left: 30%;
  align-items: center; /* Vertically align buttons if needed */
}
  
  </style>
</head>
<body>

  <!-- The GIF background container -->
  <div class="img-background">
  </div>

  <!-- Sticky header -->
  <header>
    <div class="header-content">
      <a href="home.php" class="header-content">
        <img src="0cf447fa-b764-4863-8cc3-2e18b72e18a1-removebg-preview.png" alt="Site Logo" class="logo">
        <h1>CyberSecuriTips</h1>
      </a>

        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="topics.php" class="active">Topics</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="faqs.php">FAQS</a></li>
          </ul>
          <div class="button-container">
            <button type="button" class="log-out" onclick="window.location.href='logout.php'">log-out</button>
          </div>
        </nav>
    </div>
  </header>

  <!-- Main content starts right after the video -->
  <main class="content">
    <section>
      <h2>Introduction to Attack Targets</h2>
      <p>
        In the ever-evolving landscape of the digital world, where information flows freely and connectivity is paramount, the specter of cyber threats looms large. At the heart of these threats lies a fundamental concept: the attack target. Understanding what these targets are—and why they are so appealing to malicious actors—is not merely a technical exercise; it is a crucial step in empowering individuals to navigate the online realm safely and responsibly.

        This section aims to illuminate the nature of attack targets and provide a foundational understanding upon which effective defense strategies can be built.
      </p>
      <h1>What is an Attack Target?</h1>
      <p style="text-indent: 0; padding-left: 30px;">
        An attack target is any system, device, data repository, digital identity, or individual that a cybercriminal seeks to compromise.
      </p>
      <p>These targets are not chosen randomly—they are selected based on:</p>
      <ul>
        <li><strong>Perceived value</strong></li><br>
        <li><strong>Vulnerabilities</strong></li><br>
        <li><strong>Ease of access</strong></li>
      </ul>
      <p style="text-indent: 0;padding-left: 30px;">Attack motivations range from financial gain (via data theft or ransomware) to political objectives or disruption of critical infrastructure. As our digital lives grow more complex, so does the range of potential attack targets.</p><br>
      <h1>
        Key Categories of Attack Targets
      </h1><br><br> 
      <ul>
        <li><strong>Digital Systems:</strong><br><br> Includes servers, networks, websites, and cloud infrastructure. These systems store sensitive data and deliver critical services, making them prime targets.</li><br>
        <li><strong>User Endpoints:</strong><br><br> Personal devices like computers, smartphones, tablets, etc., often store login credentials and sensitive data, making them attractive for attackers.</li><br>
        <li><strong>Data Itself:</strong><br><br> Information such as personally identifiable information (PII), financial records, and trade secrets is a primary target for theft, identity fraud, or resale on the dark web.</li><br>
        <li><strong>Online Accounts:</strong><br><br> Accounts for email, banking, e-commerce, and social media are often compromised to steal data, spread malware, or conduct financial fraud.</li><br>
        <li><strong>Connected Devices (IoT):</strong><br><br> Smart home devices, wearables, and industrial IoT sensors often lack robust security features, making them vulnerable to remote attacks and exploitation.</li><br>
      </ul>

      <h1>How Attack Targets Are Used? </h1>
      <div class="step-container">
        <div class="step">
            <div class="step-content">
                <p class="step-title" style="font-size: 30px;"><strong>Identifying Vulnerabilities</strong></p>
                <p class="step-description" style="text-indent: 0;"><strong>Technical Weaknesses: </strong>Outdated software, unpatched systems, misconfigured networks, and weak or reused passwords are common entry points.</p>
                <p class="step-description" style="text-indent: 0;"><strong>Human Weaknesses: </strong>Social engineering tactics like phishing prey on human psychology. Attackers target individuals who may be less security-aware, more trusting, or prone to making mistakes.</p>
                <p class="step-description" style="text-indent: 0;"><strong>Lack of Security Investment:</strong> Small organizations or individuals with minimal cybersecurity defenses become easy prey.</p>
            </div>
        </div>
    
        <div class="step">
            <div class="step-content">
                <p class="step-title" style="font-size: 30px;"><strong>Assessing Potential Gain</strong></p>
                <p class="step-description" style="text-indent: 0;"><strong>Financial Rewards:</strong> Credit card data, banking access, and cryptocurrency wallets attract cybercriminals seeking monetary gain.</p>
                <p class="step-description" style="text-indent: 0;"><strong>Sensitive Information: </strong>Medical records, government files, and trade secrets are valuable on the black market or for espionage.</p>
                <p class="step-description" style="text-indent: 0;"><strong>Disruption and Leverage: </strong>Attacks like DDoS or ransomware can cripple services, often leading to extortion or leverage in political conflicts.</p>
                <p class="step-description" style="text-indent: 0;"><strong>Access to Further Targets:</strong> One compromised system may allow lateral movement to more critical systems in a network or supply chain.</p>
            </div>
        </div>
    
        <div class="step">
            <div class="step-content">
                <p class="step-title" style="font-size: 30px;"><strong>Considering Opportunity and Ease of Access</strong></p>
                <p class="step-description" style="text-indent: 0;"><strong>Financial Rewards:</strong> Attackers often target organizations or individuals with access to financial data, aiming for theft, fraud, or ransomware payments.</p>
                <p class="step-description" style="text-indent: 0;"><strong>Sensitive Information: </strong>Entities holding valuable data like healthcare records, personal identifiable information (PII), trade secrets, or government intelligence are prime targets for data breaches.</p>
                <p class="step-description" style="text-indent: 0;"><strong>Disruption and Leverage: </strong>Some attackers aim to disrupt critical infrastructure or business operations, potentially for financial gain through extortion or to achieve political or ideological goals.</p>
            </div>
        </div>
    </div>

    <!-- For Individuals -->
<h1>Safety Tips</h1>

<p style="text-align: center;">To mitigate the risks associated with being an attack target, individuals and organizations should adopt a proactive cybersecurity mindset:</p><br>

<p style="text-align: left;font-size: 30px;"><strong>For Individuals</strong></p>
<div class="step-container">
    <!-- Default individual tips -->
    <div class="step"><div class="number-circle">1</div><p class="step-title">Use strong, unique passwords and enable multi-factor authentication (MFA)</p></div>
    <div class="step"><div class="number-circle">2</div><p class="step-title">Keep software and devices updated to patch known vulnerabilities</p></div>
    <div class="step"><div class="number-circle">3</div><p class="step-title">Be cautious of phishing emails and suspicious links—when in doubt, don’t click</p></div>
    <div class="step"><div class="number-circle">4</div><p class="step-title">Secure personal devices with antivirus tools and firewall settings</p></div>
    <div class="step"><div class="number-circle">5</div><p class="step-title">Avoid using unsecured Wi-Fi networks for sensitive transactions</p></div>

<?php
require 'config.php';

try {
  $stmt = $pdo->prepare("SELECT * FROM safety_tips WHERE category = 'individual' ORDER BY created_at ASC");
  $stmt->execute();
  $tipNumber = 6; // Starts after default 5 tips
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<div class="step">';
      echo '<div class="number-circle">' . $tipNumber++ . '</div>';
      echo '<p class="step-title" style="padding-top: 1px;">' . htmlspecialchars($row['tip_text']) . '</p>';
      echo '<div style="margin-top:5px;">';
      echo '<a href="edit_tip.php?id=' . $row['id'] . '"><button>Edit</button></a> ';
      echo '<a href="delete_tip.php?id=' . $row['id'] . '" onclick="return confirm(\'Are you sure you want to delete this tip?\');"><button>Delete</button></a>';
      echo '</div>';
      echo '</div>';
  }
} catch (PDOException $e) {
  echo "<p>Error loading individual tips: " . $e->getMessage() . "</p>";
}
?>
</div>


<!-- For Organizations -->
<p style="text-align: left;font-size: 30px;"><strong>For Organizations</strong></p>
<div class="step-container">
    <!-- Default organization tips -->
    <div class="step"><div class="number-circle">1</div><p class="step-title">Conduct regular security audits and penetration tests</p></div>
    <div class="step"><div class="number-circle">2</div><p class="step-title">Invest in employee cybersecurity training to reduce human-related risks</p></div>
    <div class="step"><div class="number-circle">3</div><p class="step-title">Enforce strict access controls and apply the principle of least privilege</p></div>
    <div class="step"><div class="number-circle">4</div><p class="step-title">Deploy endpoint protection, firewalls, and intrusion detection systems (IDS)</p></div>
    <div class="step"><div class="number-circle">5</div><p class="step-title">Back up critical data regularly and securely, to mitigate the impact of ransomware</p></div>

<?php
try {
  $stmt = $pdo->query("SELECT * FROM safety_tips WHERE category = 'organization' ORDER BY created_at ASC");
  $tipNumber = 6; // Starting number for user tips
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<div class="step">';
      echo '<div class="number-circle">' . $tipNumber++ . '</div>';
      echo '<p class="step-title" style="padding-top: 1px;">' . htmlspecialchars($row['tip_text']) . '</p>';
      // Add Edit and Delete buttons linking to edit and delete scripts with tip ID
      echo '<div style="margin-top:5px;">';
      echo '<a href="edit_tip.php?id=' . $row['id'] . '"><button>Edit</button></a> ';
      echo '<a href="delete_tip.php?id=' . $row['id'] . '" onclick="return confirm(\'Are you sure you want to delete this tip?\');"><button>Delete</button></a>';
      echo '</div>';
      echo '</div>';
  }
} catch (PDOException $e) {
  echo "<p>Error loading user tips: " . $e->getMessage() . "</p>";
}
?>
</div>
<!-- Add Tip Button -->
<div id="addTipButtonContainer" style="margin-top: -40px;">
  <a href="add_tip.php"><button id="addTipButton">Add a Safety Tip</button></a>
</div>
      
      <h1>OTHER TOPICS</h1><br><br>
      <div class="flex-container">

        <a href="phishing_attack.php">
        <div class="flex-box">
          <img src="Phishing Attacks Growing Concern for Internet Users.jpg"><br><br>
          <h2>
            Phishing Attacks <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
          </h2>
          <p>It involve tricking individuals into revealing sensitive information, such as passwords or credit card details, by pretending to be a trustworthy entity through emails or fake websites.</p>
        </div>
        </a>

        <a href="malware.php">
        <div class="flex-box">
          <img src="Why Red Warning Messages Can Deter Visitors and Harm Your Website’s Reputation_.jpg"><br><br>
          <h2 style="margin-right: 6px;">
            Malware Infections <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
          </h2>
          <p>It occur when malicious software, such as viruses or ransomware, is installed on a system to steal data, disrupt operations, or damage the device.</p>
        </div>
        </a>

        <a href="pass_theft.php">
          <div class="flex-box">
            <img src="password theft.jpg"><br><br>
            <h2 style="margin-right: 6px;">
              Password Thefts <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
            </h2>
            <p>Cybercriminals often steal passwords through phishing, keyloggers, or weak security practices. Using strong, unique passwords and enabling multi-factor authentication (MFA) are essential tips to protect accounts.</p>
          </div>
          </a>

          <a href="tapping.php">
            <div class="flex-box">
              <img src="network tapping.jpg"><br><br>
              <h2 style="margin-right: 6px;">
                Network Tapping <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
              </h2>
              <p>Network tapping is a form of eavesdropping where attackers intercept and monitor data as it travels over a network. This can lead to sensitive information being stolen if data is not encrypted.</p>
            </div>
            </a>

            <a href="pirating.php">
              <div class="flex-box">
                <img src="Wireless Network Pirating.jpg"><br><br>
                <h2 style="margin-right: 6px;">
                  Wireless Network Pirating <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
                </h2>
                <p>This occurs when unauthorized users connect to a wireless network without permission, potentially intercepting data or consuming bandwidth. Securing Wi-Fi with strong encryption (like WPA3) is essential.</p>
              </div>
              </a>

              <a href="cloud.php">
                <div class="flex-box">
                  <img src="Attacks in the Cloud.jpg"><br><br>
                  <h2 style="margin-right: 6px;">
                    Attacks in the Cloud <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
                  </h2>
                  <p>Cloud environments are vulnerable to data breaches, misconfigurations, and insecure APIs. Shared responsibility models mean both providers and users must take security precautions.</p>
                </div>
                </a>

                <a href="encrypt.php">
                  <div class="flex-box">
                    <img src="Encryption Cracking.jpg"><br><br>
                    <h2 style="padding-left: 37%;">
                      Encryption Cracking <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
                    </h2>
                    <p style="text-align: center;">Encryption cracking involves attempts to bypass or break encryption algorithms to access secured data. Modern encryption like AES-256 is strong, but poor implementation can make cracking easier.</p>
                  </div>
                  </a>
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