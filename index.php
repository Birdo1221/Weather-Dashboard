<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main</title>
  <link rel="icon" type="image/x-icon" href="Birdo.webp">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap');
    
    .hamburger {
      display: block;
      position: fixed;
      top: 20px;
      left: 20px;
      font-size: 30px;
      cursor: pointer;
      color: #ededed;
      z-index: 1001;
      background-color: rgb(22, 90, 121, 0.76);
      border: 2px solid #092544;
      border-radius: 5px;
      padding: 5px;
      transition: background-color 0.3s;
    }

    .hamburger:hover {
      background-color: #f0cccc8f;
    }

    .sidebar {
      width: 200px;
      background-color: #333;
      color: white;
      padding: 20px;
      position: fixed;
      top: 0;
      left: -300px; /* Initially hidden */
      height: 100%;
      transition: left 0.3s;
      z-index: 1000;
      box-shadow: 4px 5px 13px 5px rgb(19, 110, 147);
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 10px;
      text-decoration: none;
      font-family: "Red Hat Display", sans-serif;
    }

    .sidebar a:hover {
      background-color: #575757;
    }

    .page-button {
      background-color: purple;
      text-decoration: none;
    }

    label[for="country"], label[for="postcode"] {
      font-size: 16px;
      margin-right: 10px;
      font-family: Arial, sans-serif;
      display: block;
      margin-bottom: 8px;
    }

    .weather-select {
      width: 200px;
      padding: 8px 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      appearance: none; 
      background-repeat: no-repeat;
      background-position: right 10px top 50%;
      background-size: 10px;
      cursor: pointer;
      margin-bottom: 15px;
    }

    .weather-text {
      width: 200px;
      padding: 8px 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin-bottom: 15px;
    }

    .weather-button {
      padding: 8px 16px;
      margin-left: 10px;
      background-color: #325d34;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      font-family: Arial, sans-serif;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .weather-button:hover {
      background-color: #327235;
    }

    .disabledOption {
      color: #aaa;
    }

    .container {
      background: rgba(55, 55, 55, 0.878);
      font-family: 'Sometype Mono', monospace;  
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
      text-align: center;
      color: snow;
    }

    .banner-top, .banner-bottom {
      color: snow; 
      text-align: center;
      background-color: #333;
      width: 100%;
      font-family: 'Sometype Mono', monospace;
    }

    h1, h2 {
      text-align: center;
      color: rgba(255, 255, 255, 0.8);
    }

    .weather-text, .weather-select, .weather-button {
      max-width: 300px;
      padding: 10px;
      margin: 10px auto;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: #222;
      color: #f0f0f0;
    }

    .weather-button {
      background-color: #357238;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .weather-button:hover {
      background-color: #45a049;
    }

    .banner-bottom {
      text-align: center;
      background-color: #333;
      padding: 20px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 1;
    }

    @keyframes gradient-animation {
      0% {
        background-position: 0% 0%;
      }
      10% {
        background-position: 10% 10%;
      }
      20% {
        background-position: 20% 20%;
      }
      25% {
        background-position: 30% 30%;
      }
      35% {
        background-position: 40% 40%;
      }
      40% {
        background-position: 50% 50%;
      }
      50% {
        background-position: 60% 60%;
      }
      65% {
        background-position: 70% 70%;
      }
      75% {
        background-position: 80% 80%;
      }
      85% {
        background-position: 90% 90%;
      }
      90% {
        background-position: 100% 100%;
      }
      100% {
        background-position: 0% 0%;
      }
    }

    .port-title{
      margin-bottom: 5px;
    }

    @media only screen and (max-width: 700px) {
    .is-mobile .dropbtn {
      background-color: transparent;
      font-size: 14px; 
      border-radius: 8px; 
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: none; 

    }
    .is-mobile .content {
      background: linear-gradient(-100deg,
            #283048 0%,
            #253b7d 20%,
            #283048 40%,
            #374e91 60%,
            #283048 80%,
            #4a5883 100%);
    }
    } 

    nav {
      z-index: 2;
      background-color: rgb(15, 16, 17);
      text-align: center;
      width: 100%;
      top: 0;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
      font-size: 16px;
    }

    nav a:hover {
      opacity: 0.7; 
      text-decoration: underline;
    }

    section {
      padding: 20px;
      margin-bottom: 80px;
      min-height: calc(100vh - 80px); 
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      z-index: 1;
    }

    footer {
      background-color: rgb(15, 16, 17);
      padding: 0px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
      font-size: 18px;
    }


    p {
      font-size: 16px;
      padding: 1px;
    }

    .abuse-banner {
      position: absolute;
      left: 30px; 
      width: 200px; 
      z-index: 3; 
      filter: invert(90%);
      cursor: pointer;
    }

    .center-box, .center-box2 {
      text-transform: capitalize;
      text-align: center;
      position: relative;
      border-radius: 15px;
      border: 2px solid black;
      background: linear-gradient(0deg, #283048 0%, #253b7d 20%, #283048 40%, #2b375c 60%, #283048 80%, #4a5883 100%); 
      padding: 2rem;
      margin-top: -40%;
    }


    .pfp {
      position: absolute;
      top: 25px; 
      right: 30px; 
      width: 60px;
      border-radius: 60%; 
      border: 2px solid #fff;
      z-index: 3;
    }

    .pfp:hover {
      opacity: 0.7; 
    }


    .project-box {
      width: 280px;
      border: 2px solid #00000000;
      border-radius: 8px;
      padding: 8px;
      margin-bottom: 8px;
      animation: projectAnimation 0.5s ease-in-out forwards;
    }

    .project-box h3 {
      font-size: 16px;
      margin-bottom: 6px;
    }

    .project-box p {
      font-size: 16px;
    }

    .Pre-button, .Next-button, .switch-buttons .back-button {
      display: inline-block;
      padding: 8px 16px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-bottom: 10px;
      font-size: 16px;
    }

    .back-button:active {
      background-color: #a01111bb;
    }

    .gitrepo-button {
      display: inline-block;
      padding: 8px;
      background-color: #4f00be;
      color: #fff;
      text-decoration: none;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 14px;
    }

    .gitrepo-button:hover {
      background-color: #2d006d;
    }

    .gitrepo-button:active {
      background-color: #1f004b;
    }

    .back-button {
      font-size: 16px;
      display: inline-block;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      cursor: pointer;
      padding: 8px 14px;
    }

    .back-button:hover {
      background-color: #0033cc;
    }

    .dropbtn {
      background-color: transparent;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 12px;
      color: #fff;
    }

    .dropbtn:hover {
      text-decoration: underline;
      animation: changeColorhover 3.6s ease-in-out infinite;
    }
    .dropbtn:active {
      text-decoration: underline;
      animation: changeColorhover 3.6s ease-in-out infinite;
    }

    @keyframes changeColorhover {
      0%, 100% {
          color: #1e3a5f; 
      }
      25%, 75% {
          color: #5085a5;
      }
      50% {
          color: #104e8b;
      }
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: rgba(255, 255, 255);
      min-width: 160px;
      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
      z-index: 1;
      left: 50%; 
      transform: translateX(-50%); 
    }

    .dropdown-content a {
      color: #333;
      padding: 10px;
      text-decoration: none;
      display: block;
      background-color: rgba(255, 255, 255);
    }

    .dropdown-content a:hover {
      background-color: rgba(255, 255, 255, 0.8);
    }

    .dropbtn:hover + .dropdown-content,
    .dropdown-content:hover {
      display: block;
    }

    section {
      margin-bottom: -60px;
    }

    @media screen and (max-width: 780px) {
      .pfp, .abuse-banner {
        display: none;
      }
      .center-box2 {
        display: none;
      }
    }

  </style>
  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.style.left = sidebar.style.left === '0px' ? '-300px' : '0'; /* Toggle sidebar */
    }
  </script>
</head>
<body>
  <i class="fa fa-bars hamburger" onclick="toggleSidebar()"></i> <!-- Hamburger Menu Button -->

  <div class="sidebar">
    <br><br><br><br>
    <a href="https://www.birdo.uk/">Home</a>
    <a href="https://www.blog.birdo.uk">Blog</a>
    <a href="https://write-ups.birdo.uk/">HTB Write-Ups</a>
      <img class="abuse-banner" src="https://www.abuseipdb.com/contributor/137416.svg">
  </div>

  <div class="content">
    <nav>
      <a href="https://www.api.birdo.uk"><img class="pfp" id="image" src="/Birdo.webp"></a>
      <h1 class="port-title">Welcome, Visitors</h1>
      <button class="dropbtn"></button>
      <div class="dropdown-content"></div>
    </nav>
    <section id="Home">
      <div class="center-box">
        <h2>Weather Dashboard</h2>
        <form action="app.php" method="GET">
          <label for="postcode">Enter Postcode:</label>
          <input class="weather-text" type="text" id="postcode" name="postcode" placeholder="E.g. BB44 5FE" required>
          <br><br>
          <label for="country">Select Country:</label>
          <select id="country" name="country" class="weather-select" required>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="CA">Canada</option>
            <option value="AU">Australia</option>
            <option value="DE">Germany</option>
            <option value="FR">France</option>
            <option value="IT">Italy</option>
            <option value="JP">Japan</option>
            <option value="CN">China</option>
            <option value="IN">India</option>
            <option value="BR">Brazil</option>
            <option value="RU">Russia</option>
            <option value="MX">Mexico</option>
            <option value="ZA">South Africa</option>
            <option value="KR">South Korea</option>
            <option value="ES">Spain</option>
            <option value="ID">Indonesia</option>
            <option value="AR">Argentina</option>
            <option value="SE">Sweden</option>
            <option value="NO">Norway</option>
            <option value="CH">Switzerland</option>
            <option value="NL">Netherlands</option>
            <option value="BE">Belgium</option>
            <option value="AT">Austria</option>
            <option value="PT">Portugal</option>
            <option value="PL">Poland</option>
            <option value="TH">Thailand</option>
            <option value="GR">Greece</option>
            <option value="TR">Turkey</option>
            <option value="IE">Ireland</option>
            <option value="DK">Denmark</option>
            <option value="SG">Singapore</option>
            <option value="FI">Finland</option>
            <option value="NZ">New Zealand</option>
            <option value="MY">Malaysia</option>
            <option value="HU">Hungary</option>
            <option value="CZ">Czech Republic</option>
            <option value="PH">Philippines</option>
            <option value="HK">Hong Kong</option>
            <option class="disabledOption" value="XX" disabled>Select other country...</option>
          </select>
          <br>
          <input type="submit" value="Submit" class="weather-button">
        </form>
      </div>
    </section>
  </div>

  <footer class="banner-bottom">
    <p>&copy; 2024 Birdo. All rights reserved.</p>
  </footer>

</body>
</html>
