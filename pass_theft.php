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
  background-image: url('password theft.jpg'); /* Set the image as a background */
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

.search-container {
  display: flex;
  align-items: center;
  position: relative;
  right: 100px;
  top: 10px;
  border-radius: 20px;
  padding: 5px;
  transition: width 0.4s ease;
  gap: 5px;
  
}



.search-input {
  width: 0;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 20px;
  outline: none;
  transition: width 0.4s ease, opacity 0.4s ease;
  opacity: 0;
  margin-left: -60px;
}

.search-button {
  width: 50px;
  height: 50px;
  background-color: rgba(13, 24, 177, 0.5);
  border: none;
  border-radius: 50%;
  color: white;
  font-size: 18px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.3s ease;
  margin-left: 50px;
}

.search-container.active .search-input {
  width: 180px; /* Expanding input width */
  opacity: 1;
}

.search-container.active .search-button {
  margin-left: -5px; /* Pushes the button to the right */
}

.search-icon {
  font-size: 80px;
}



.nav-search-wrapper {
  display: flex;
  align-items: center;
  gap: 0;
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
  <div class="img-background">
  </div>

  <!-- Sticky header -->
  <header>
    <div class="header-content">
      <a href="index.html" class="header-content">
        <img src="0cf447fa-b764-4863-8cc3-2e18b72e18a1-removebg-preview.png" alt="Site Logo" class="logo">
        <h1>CyberSecuriTips</h1>
      </a>
      
      <!-- ADD THIS FLEX CONTAINER -->
      <div class="nav-search-wrapper">
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="topics.html">Topics</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="faqs.html">FAQS</a></li>
          </ul>
        </nav>
  
        <div class="search-container">
          <input type="text" class="search-input" placeholder="Search..." />
          <button class="search-button" id="searchToggle">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Main content starts right after the video -->
  <main class="content">
    <section>
      <h2>Introduction to Password Thefts</h2>
      <p>
        In our increasingly digital world, passwords serve as the keys to our most sensitive personal and professional information. Unfortunately, these keys are highly sought after by cybercriminals. Password theft occurs when attackers gain unauthorized access to your login credentials, often through deceptive or technical means such as phishing, data breaches, malware, or brute-force attacks.
      <br><br>What makes password theft especially dangerous is how easily and quietly it can happen. Victims are often unaware that their credentials have been compromised until it’s too late. Once stolen, a password can unlock access to emails, banking, social media, corporate networks, and more—leading to identity theft, financial loss, and reputational damage. Worse still, if the same password is reused across multiple accounts, the breach can spread like wildfire.
      <br><br>This section will help you understand how password thefts happen, the ways stolen passwords are exploited, and practical steps to protect yourself from becoming a victim.
      </p>

      <h1>How Password Thefts Are Used? </h1>
      <p style="text-align: center;"></p>

      <div class="step-container">
        <div class="step">
            <div class="step-content">
                <p class="step-title" style="font-size: 30px;"><strong>Identity Theft</strong></p>
                <p class="step-description"  style="text-indent: 0;">Stolen credentials allow attackers to impersonate victims online, potentially damaging reputations or committing fraud.</p>
            </div>
        </div>
    
        <div class="step">
            <div class="step-content">
                <p class="step-title" style="font-size: 30px;"><strong>Financial Fraud</strong></p>
                <p class="step-description"  style="text-indent: 0;">Access to bank accounts, e-wallets, or e-commerce platforms enables direct theft or unauthorized transactions.</p>
            </div>
        </div>
    
        <div class="step">
            <div class="step-content">
                <p class="step-title" style="font-size: 30px;"><strong>Unauthorized Account Access</strong></p>
                <p class="step-description" style="text-indent: 0;text-align: center;">Attackers can break into personal or business accounts to read messages, steal data, or change settings.</p>
            </div>
        </div>

        <div class="step">
          <div class="step-content">
              <p class="step-title" style="font-size: 30px;"><strong> Credential Stuffing Attacks</strong></p>
              <p class="step-description" style="text-indent: 0;text-align: center;">If passwords are reused, attackers try the stolen credentials across many sites to gain access elsewhere.</p>
          </div>
      </div>

      <div class="step">
        <div class="step-content">
            <p class="step-title" style="font-size: 30px;"><strong> Blackmail and Extortion</strong></p>
            <p class="step-description" style="text-indent: 0;text-align: center;">Sensitive information accessed with stolen passwords may be used to threaten or extort victims.</p>
        </div>
    </div>

    <div class="step">
      <div class="step-content">
          <p class="step-title" style="font-size: 30px;"><strong>Selling on the Dark Web</strong></p>
          <p class="step-description" style="text-indent: 0;text-align: center;">Large collections of stolen credentials are often sold or traded among cybercriminals.</p>
      </div>
  </div>
        
    </div>

    <!-- safety tips -->
    <h1>Safety Tips</h1>

    <div class="step-container">
        <div class="step">
            <div class="number-circle">1</div>
            <p class="step-title" style="padding-top: 1px;">Use strong, unique passwords for every account.</p>
        </div>

        <div class="step">
          <div class="number-circle">2</div>
            <p class="step-title" style="padding-top: 1px;">Enable multi-factor authentication (MFA).</p>
        </div>

        <div class="step">
            <div class="number-circle">3</div>
            <p class="step-title" style="padding-top: 1px;"> Avoid clicking on suspicious links or attachments.</p>
        </div>

        <div class="step">
          <div class="number-circle">4</div>
          <p class="step-title" style="padding-top: 1px;">Change passwords regularly, especially after a breach.</p>
      </div>

      <div class="step">
        <div class="number-circle">5</div>
        <p class="step-title" style="padding-top: 1px;"> Use a reputable password manager.</p>
    </div>

    <div class="step">
      <div class="number-circle">6</div>
      <p class="step-title" style="padding-top: 1px;">  Monitor accounts for unusual activity.</p>
  </div>
    </div>
      
      <h1>OTHER TOPICS</h1><br><br>
      <div class="flex-container">
        <a href="attack_target.html">
            <div class="flex-box">
              <img src="Protect Your Devices, Protect Your Data!.jpg"><br><br>
              <h2 style="padding-left: 18%;">
                Attack Targets <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
                </h2>
              <p>It attacks the systems or organizations that cybercriminals focus on to exploit vulnerabilities for financial, data theft, or disruptive purposes.</p>
            </div>
            </a>

        <a href="phishing_attack.html">
        <div class="flex-box">
          <img src="Phishing Attacks Growing Concern for Internet Users.jpg"><br><br>
          <h2 style="padding-left: 15%;">
            Phishing Attacks <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
          </h2>
          <p>It involve tricking individuals into revealing sensitive information, such as passwords or credit card details, by pretending to be a trustworthy entity through emails or fake websites.</p>
        </div>
        </a>

        <a href="malware.html">
        <div class="flex-box">
          <img src="Why Red Warning Messages Can Deter Visitors and Harm Your Website’s Reputation_.jpg"><br><br>
          <h2 style="padding-left: 10%;">
            Malware Infections <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
          </h2>
          <p>It occur when malicious software, such as viruses or ransomware, is installed on a system to steal data, disrupt operations, or damage the device.</p>
        </div>
        </a>

          <a href="tapping.html">
            <div class="flex-box">
              <img src="network tapping.jpg"><br><br>
              <h2 style="padding-left: 15%;">
                Network Tapping <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
              </h2>
              <p>Network tapping is a form of eavesdropping where attackers intercept and monitor data as it travels over a network. This can lead to sensitive information being stolen if data is not encrypted.</p>
            </div>
            </a>

            <a href="pirating.html">
              <div class="flex-box">
                <img src="Wireless Network Pirating.jpg"><br><br>
                <h2 style="padding-left: 15%;">
                  Wireless Network Pirating <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
                </h2>
                <p>This occurs when unauthorized users connect to a wireless network without permission, potentially intercepting data or consuming bandwidth. Securing Wi-Fi with strong encryption (like WPA3) is essential.</p>
              </div>
              </a>

              <a href="cloud.html">
                <div class="flex-box">
                  <img src="Attacks in the Cloud.jpg"><br><br>
                  <h2 style="padding-left: 10%;">
                    Attacks in the Cloud <i class="fas fa-arrow-right" style="font-size: 18px; margin-left: 8px;"></i>
                  </h2>
                  <p>Cloud environments are vulnerable to data breaches, misconfigurations, and insecure APIs. Shared responsibility models mean both providers and users must take security precautions.</p>
                </div>
                </a>

                <a href="encrypt.html">
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
      <a href="index.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">Home</a> |
      <a href="topics.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">Topics</a> |
      <a href="resources.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">Resources</a> |
      <a href="about.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">About</a> |
      <a href="faqs.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">FAQS</a> |
    </div>

    <p style="margin-top: 20px; font-size: 14px; color: #aaa;">&copy; 2025 CyberSecuriTips. All rights reserved.</p>
  </div>
</footer>


<script>
const searchContainer = document.querySelector('.search-container');
const searchToggle = document.getElementById('searchToggle');

searchToggle.addEventListener('click', () => {
  searchContainer.classList.toggle('active');
});
</script>

</body>
</html>
