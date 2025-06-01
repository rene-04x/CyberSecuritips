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
            color: #a3a1a1;
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
            text-align: center;
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
            <li><a href="home.html">Home</a></li>
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
      <div class="main-section">
            <div class="about-content">
                           <h2>About CyberSecuriTips</h2>
                           <p style="text-align: center;">
                               CyberSecuriTips is an educational website designed to raise awareness about cybersecurity.
                           </p>
                           <p>
                               This platform is intended for educational purposes, aiming to help users understand the fundamentals of digital safety and how to protect themselves in an increasingly connected world. Whether you're a student, professional, or simply curious, CyberSecuriTips provides reliable tips, resources, and best practices to keep you informed and secure online.
                           </p>
                           
                           <div class="mission-vision">
                               <div>
                                   <h3 style="margin-top: 10%;font-size: 40px;">Our Mission</h3>
                                   <p style="margin-top: 30%;">
                                       Our mission is to spread cybersecurity awareness and equip people with the knowledge they need to protect themselves from digital threats like phishing, malware, identity theft, and more.
                                   </p>
                               </div>
                               <div>
                                   <h3>What You’ll Find on the Site?</h3>
                                   <p>
                                    - Curated cybersecurity topics explained in simple terms<br><br>

                                    - Real-world examples of threats and how to avoid them<br><br>
                                    
                                    - Links to trusted organizations (NIST, OWASP, etc.)<br><br>

                                    - FAQs<br><br>

                                    - Add, edit and delete tips
                                   </p>
                               </div>
                           </div>

                           <div class="mission-vision">
                            <div>
                                <h3>Who This is For?</h3>
                                <p style="text-align: center;">
                                    This site is perfect for students or anyone wanting to learn and improve their cybersecurity awareness.
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
      <a href="home.html" style="color: #ccc; margin: 0 10px; text-decoration: none;">Home</a> |
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
