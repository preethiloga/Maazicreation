<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navigation styling */
        nav {
            background-color: #333;
            position: fixed; /* Fixes the nav bar to the top */
            top: 0;
            width: 100%;
            padding: 10px 0;
            z-index: 1000; /* Ensures the nav stays above other content */
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #111;
            color:white;
        }

        /* Add padding to the body to prevent content from hiding behind the fixed navbar */
        .content {
            padding-top: 60px; /* This padding should be at least as tall as the nav bar */
        }
    </style>
 <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container" style="position: fixed; margin-left: -1%;">
        <a class="navbar-brand" href="index.html">
          <span>
          Maazicreation
          </span>
        </a>
        
    <ul style="margin-left: 26%;">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>

      </nav>
    </div>
  </header>