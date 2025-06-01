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
    .video-background {
      position: relative;
      width: 100%;
      height: 115vh; /* Full screen height */
      overflow: hidden;
      z-index: 0;
    }

    .video-background video {
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
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
  margin-left: 10%;
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


    .button-container {
      position: absolute;
      bottom: 20px;
      left: 70px;
      gap: 10px;
      z-index: 1;
      top: 73%;
    }

    .login,
    .sign-up {
      background-color: transparent;
      color: #f4f4f4;
      padding: 10px 30px;
      border: 2px solid wheat;
      border-radius: 10px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
      font-size: 20px;
      margin-right: 20px;
    }

    .login:hover,
    .sign-up:hover {
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
      padding-left: 15%;
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
  font-size: 20px;
  line-height: 1.6;
  color: #dfdcdc;
  margin-bottom: 15px;
  letter-spacing: 0.5px;
  text-align: justify;
  max-width: 800px;
  padding: 10px;
  margin: 0; /* Remove extra margins */
    }

    .video-content {
  top: 18px;
  left: 3%;
  width: 450px;
  height: 530px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
  mix-blend-mode:lighten;


    }

    .side-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;

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



@media (max-width: 768px) {
            .main-section {
                flex-direction: column;
            }

            nav ul {
                flex-direction: column;
                text-align: center;
            }

            .nav-search-wrapper {
                flex-direction: column;
                align-items: center;
            }
            .search-container{
                margin-left: 0;
            }
        }





  </style>
</head>
<body>

  <!-- The GIF background container -->
  <div class="video-background">
    <video autoplay muted loop playsinline>
      <source src="cybersec.mp4" type="video/mp4">
    </video>
    <div class="button-container">
      <h1 style="color: whitesmoke;">Welcome to CyberSecuriTips.</h1><br>
      <button type="button" class="login" onclick="window.location.href='login.html'">Login</button>
      <button type="button" class="sign-up" onclick="window.location.href='register.html'">Sign-up</button>
    </div>
  </div>

  <!-- Sticky header -->
  <header>
    <div class="header-content">
      <a href="index.html" class="header-content">
        <img src="0cf447fa-b764-4863-8cc3-2e18b72e18a1-removebg-preview.png" alt="Site Logo" class="logo">
        <h1>CyberSecuriTips</h1>
      </a>
      
        <nav>
          <ul>
            <li><a href="topics.html">Topics</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="faqs.html">FAQS</a></li>
          </ul>
        </nav>
    </div>
  </header>

  <!-- Main content starts right after the video -->
  <main class="content">
    <section>
      <h2>Introduction to CyberSecurity</h2>
      <div class="main-section">
      <div class="video-content">
        <video class="side-video" autoplay muted loop playsinline>
          <source src="975656538d1061a90385579507cd4ae6.mp4" type="video/mp4">
        </video>
      </div>
      <p> <strong>Cybersecurity</strong> 
        is the practice of protecting computers, networks, and data from unauthorized access, damage, or theft. 
        As technology becomes more embedded in everyday life, cybersecurity is essential for individuals, businesses, 
        and governments. It ensures the confidentiality, integrity, and availability of information through tools like 
        firewalls, encryption, and secure practices. <br><br> The rise in digital threats—such as <strong>phishing attacks</strong> and <strong>malware infections</strong>—makes cybersecurity more important than ever. 
        Phishing tricks users into giving away sensitive information through fake emails or websites, while malware, 
        including ransomware and viruses, can steal data or disable entire systems. Common targets include banks, hospitals, 
        schools, and personal devices because of the valuable data they store. <br><br> Strong cybersecurity measures help 
        reduce risks, prevent data breaches, and maintain trust in digital systems. Investing in security tools and user 
        awareness is key to staying safe in the digital age. 
      </p>
      </div>
      <h1>TOPICS</h1><br><br>
      <div class="flex-container">
        <a href="attack_target.html">
        <div class="flex-box">
          <img src="Protect Your Devices, Protect Your Data!.jpg"><br><br>
          <h2 style="margin-left: 20px;">
            Attack Targets <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
            </h2>
          <p>It attacks the systems or organizations that cybercriminals focus on to exploit vulnerabilities for financial, data theft, or disruptive purposes.</p>
        </div>
        </a>

        <a href="phishing_attack.html">
        <div class="flex-box">
          <img src="Phishing Attacks Growing Concern for Internet Users.jpg"><br><br>
          <h2>
            Phishing Attacks <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
          </h2>
          <p>It involve tricking individuals into revealing sensitive information, such as passwords or credit card details, by pretending to be a trustworthy entity through emails or fake websites.</p>
        </div>
        </a>

        <a href="malware.html">
        <div class="flex-box">
          <img src="Why Red Warning Messages Can Deter Visitors and Harm Your Website’s Reputation_.jpg"><br><br>
          <h2 style="margin-right: 6px;">
            Malware Infections <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
          </h2>
          <p>It occur when malicious software, such as viruses or ransomware, is installed on a system to steal data, disrupt operations, or damage the device.</p>
        </div>
        </a>

        <a href="pass_theft.html">
          <div class="flex-box">
            <img src="password theft.jpg"><br><br>
            <h2 style="margin-right: 6px;">
              Password Thefts <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
            </h2>
            <p>Cybercriminals often steal passwords through phishing, keyloggers, or weak security practices. Using strong, unique passwords and enabling multi-factor authentication (MFA) are essential tips to protect accounts.</p>
          </div>
          </a>

          <a href="tapping.html">
            <div class="flex-box">
              <img src="network tapping.jpg"><br><br>
              <h2 style="margin-right: 6px;">
                Network Tapping <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
              </h2>
              <p>Network tapping is a form of eavesdropping where attackers intercept and monitor data as it travels over a network. This can lead to sensitive information being stolen if data is not encrypted.</p>
            </div>
            </a>

            <a href="pirating.html">
              <div class="flex-box">
                <img src="Wireless Network Pirating.jpg"><br><br>
                <h2 style="margin-right: 6px;">
                  Wireless Network Pirating <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
                </h2>
                <p>This occurs when unauthorized users connect to a wireless network without permission, potentially intercepting data or consuming bandwidth. Securing Wi-Fi with strong encryption (like WPA3) is essential.</p>
              </div>
              </a>

              <a href="cloud.html">
                <div class="flex-box">
                  <img src="Attacks in the Cloud.jpg"><br><br>
                  <h2 style="margin-right: 6px;">
                    Attacks in the Cloud <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
                  </h2>
                  <p>Cloud environments are vulnerable to data breaches, misconfigurations, and insecure APIs. Shared responsibility models mean both providers and users must take security precautions.</p>
                </div>
                </a>

                <a href="encrypt.html">
                  <div class="flex-box">
                    <img src="Encryption Cracking.jpg"><br><br>
                    <h2 style="margin-right: 6px;">
                      Encryption Cracking <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
                    </h2>
                    <p>Encryption cracking involves attempts to bypass or break encryption algorithms to access secured data. Modern encryption like AES-256 is strong, but poor implementation can make cracking easier.</p>
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
      <a href="index.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">Home</a> |
      <a href="topics.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">Topics</a> |
      <a href="resources.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">Resources</a> |
      <a href="about.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">About</a> |
      <a href="faqs.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">FAQS</a> |
    </div>

    <p style="margin-top: 20px; font-size: 14px; color: #aaa;">&copy; 2025 CyberSecuriTips. All rights reserved.</p>
  </div>
</footer>


</body>
</html>
