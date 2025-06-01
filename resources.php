<?php
require 'config.php'; // Database connection settings

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

    /* Container for the GIF to be used as a background */
    .img-background {
      position: relative;
  width: 100%; /* Adjust as needed */
  height: 100vh; /* Full screen height */
  overflow: hidden;
  z-index: 0;
  background-image: url('resources_bg.jpg'); /* Set the image as a background */
  background-size: cover; /* Scale to cover the container */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Prevent tiling if there's empty space */
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

.link {
  display: flex;
  align-items: left;
  gap: 20px; /* space between image and text */
  padding: 10px;
  border-radius: 15px;
  width: 65%;
  margin: 10px auto 40px auto;
  background: rgba(30, 41, 59, 0.8);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  text-decoration: none;
  margin-left: 20px;
}

.link img {
  width: 50px;
  height: auto;
  flex-shrink: 0; /* prevents image from shrinking */
}

.link a {
  display: flex;
  align-items: center;
  gap: 20px;
  text-decoration: none;
  color: white;
  font-size: 18px;
  line-height: 1.4;
}

.link area:hover {
    text-decoration: underline;
}

.link-text {
  display: block;
}

@media (max-width: 768px) {
            .main-section {
                flex-direction: column;
            }

            nav ul {
                flex-direction: column;
                text-align: center;
            }
        }



  </style>
</head>
<body>

  <!-- The GIF background container -->
  <div class="img-background">
    <h2>RESOURCES</h2>
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
            <li><a href="topics.php">Topics</a></li>
            <li><a href="resources.php" class="active">Resources</a></li>
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
      <div class="main-section">
        <p style="font-size: 20px;">This section includes a curated list of website links that provide valuable information on cybersecurity topics such as malware, phishing, password protection, and network security. These websites serve as trusted sources for further learning, official guidelines, tools, and real-time updates. By exploring these links, users can deepen their understanding, stay informed about current threats, and access practical advice from credible organizations in the field of cybersecurity.</p>
      </div>
      <div class="link">
        <a href="https://www.nist.gov/topics/cybersecurity" target="_blank">
          <img src="link.png" alt="NIST Cybersecurity">National Institute of Standards and Technology (NIST).
          (2023). Cybersecurity Framework.
        </a>
      </div>

      <div class="link">
        <a href="https://www.cisa.gov/topics/cybersecurity" target="_blank">
          <img src="link.png" alt="NIST Cybersecurity">Cybersecurity and Infrastructure Security Agency (CISA). (2023). Cybersecurity Basics. 
        </a>
      </div>

      <div class="link">
        <a href="https://www.ibm.com/topics/cybersecurity" target="_blank">
          <img src="link.png" alt="NIST Cybersecurity">IBM.
          (2023). What is Cybersecurity? 
        </a>
      </div>

      <div class="link">
        <a href="https://www.cisco.com/c/en/us/products/security/what-is-cybersecurity.html" target="_blank">
          <img src="link.png" alt="NIST Cybersecurity">Cisco.
          (2023). Cybersecurity Explained. 
        </a>
      </div>

      <div class="link">
        <a href="https://www.kaspersky.com/resource-center/definitions/what-is-cyber-security" target="_blank">
          <img src="link.png" alt="NIST Cybersecurity">Kaspersky.
          (2023). What is Cybersecurity?
        </a>
      </div>

      <div class="link">
        <a href="https://doi.org/10.6028/NIST.SP.800-61r2" target="_blank">
          <img src="link.png" alt="NIST Cybersecurity">National Institute of Standards and Technology (NIST). (2020). NIST Special Publication 800-61 Revision 2: Computer Security Incident Handling Guide
        </a>
      </div>

      <div class="link">
        <a href="https://www.nist.gov/cyberframework" target="_blank">
          <img src="link.png" alt="NIST Cybersecurity">National Institute of Standards and Technology (NIST). (Various years). NIST Cybersecurity Framework. National Institute of Standards and Technology.
        </a>
      </div>

      <div class="link">
        <a href="https://www.cisa.gov/" target="_blank">
          <img src="link.png" alt="NIST Cybersecurity">Cybersecurity and Infrastructure Security Agency (CISA). (Various years). CISA.gov. Cybersecurity and Infrastructure Security Agency.
        </a>
      </div>

      <div class="link">
        <a href="https://owasp.org/" target="_blank">
          <img src="link.png" alt="NIST Cybersecurity">Open Web Application Security Project (OWASP). (Various years). OWASP.org. Open Web Application Security Project.
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
