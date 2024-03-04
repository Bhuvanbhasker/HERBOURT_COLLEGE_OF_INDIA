<?php 
include "db_connect.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Herbourt College of India</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Add custom styles for login page */
        body {
            background-color: #d21212;
            font-family: Arial, sans-serif;
            background-image: url(https://media.istockphoto.com/id/1368151370/photo/user-typing-login-and-password-cyber-security-concept.jpg?s=2048x2048&w=is&k=20&c=1uwvSRvYtsnV-Hiow9sAMmk9-E0Wa0qc7jsvJTPz3BM=);
            
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(177, 36, 14, 0.1);
            background-color: transparent; /* Make the container transparent */
        }
        header {
            color: white;
        }
        .container h2 {
            text-align: center;
            color: blue;
            -webkit-text-fill-color: #007bff;
        }
        .container label {
            display: block;
            margin-bottom: 10px;
            color: white; 
        }
        .container input[type="email"],
        .container input[type="password"],
        .container button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #da0e0e;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .container button {
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #0056b3;
        }
        nav ul li a {
            color: #f7f3f3; /* Change the color to your desired color code */
        }
        
        /* Or */
        
        nav ul li {
            color: #000; /* Change the color to your desired color code */
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="courses.html">COURSES</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="notice.html">NOTICE</a></li>
                <li><a href="photo.html">PHOTO</a></li>
                <!-- <li><a href="login.php">LOGIN</a></li> -->
                <li><a href="signup.php">SIGNUP</a></li>
            </ul>
        </nav>
        <!-- Header content here -->
    </header>
    <main>
        <section id="login">
            <div class="container">
                <h2>SIGN-IN</h2>
                <form action="login_process.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Login</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <!-- Footer content here -->
    </footer>
</body>
</html>
