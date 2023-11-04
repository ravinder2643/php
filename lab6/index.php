<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submissions here
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        // Add code to validate and process login/registration data here

        // Example: Check for a successful login and redirect
        if ($username === "ravi" && $password === "1234") {
            header("Location: success.html");
            exit;
        } else {
            header("Location: error.html");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Department</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
      
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url("bgpic.webp");
        background-size: cover;  
        background-repeat: no-repeat; 

      header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
      }

      nav ul {
        list-style-type: none;
        padding: 0;
        flex: auto;
      }

      nav li {
        display: inline;
        margin: 0 10px;
      }

      main {
        padding: 20px;
      }

      footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1rem;
      }
    </style>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const contentDiv = document.getElementById("content");

        // Load content dynamically
        function loadPage(page) {
          fetch(page)
            .then((response) => response.text())
            .then((data) => {
              contentDiv.innerHTML = data;
            });
        }

        // Initial content
        loadPage("home.html");

        // Navigation
        const links = document.querySelectorAll("nav a");
        links.forEach((link) => {
          link.addEventListener("click", (e) => {
            e.preventDefault();
            const page = e.target.getAttribute("href");
            loadPage(page);
          });
        });
      });
    </script>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#login">Login</a></li>
          <li><a href="#register">Registration</a></li>
          <li><a href="about.html">About us</a></li>
        </ul>
      </nav>
    </header>

    <div class="content">
      <!-- <img src="bgpic.webp" alt="firmpic" /> -->
      <section id="home">
        <h1>Welcome to Our Department</h1>
        <p>This is the homepage of our department.</p>
      </section>

      <section id="login" class="hidden">
        <h2>Login</h2>
        <form id="loginForm">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required />
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
          <button type="submit">Login</button>
        </form>
      </section>

      <section id="register" class="hidden">
        <h2>Registration</h2>
        <form id="registrationForm">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required />
          <button type="submit">Register</button>
        </form>
      </section>

      <section id="about" class="hidden">
        <h2>About Us</h2>
        <p>We are a department dedicated to...</p>
      </section>
    </div>

    <!-- <script src="script.js"></script> -->
  </body>
</html>
