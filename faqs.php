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

        @media (max-width: 768px) {
            .mission-vision {
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


  <header>
    <div class="header-content">
      <a href="index.html" class="header-content">
        <img src="0cf447fa-b764-4863-8cc3-2e18a1-removebg-preview.png" alt="Site Logo" class="logo">
        <h1>CyberSecuriTips</h1>
      </a>
      
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