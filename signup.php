<?php
 include "db_connect.php";
 
 

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password for security
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute SQL query to insert user data into the database
    $sql = "INSERT INTO register (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);
    
    if ($stmt->execute()) {
        // Registration successful, redirect user to a success page
        header("Location: signup.php");
        exit();
    } else {
        // Registration failed, redirect user to an error page
        header("Location: signup_error.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Herbourt College of India</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Add custom styles for signup page */
        body {
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
            background-image: url(https://media.istockphoto.com/id/1460258222/photo/abstract-urban-buildings.jpg?s=2048x2048&w=is&k=20&c=OTjbRgiJP2HqDtRPSgq0RAyyEWT1giyVZn7UuSg1skk=);
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: transparent;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            -webkit-text-fill-color: #007bff;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #f1e8e8;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
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
                <li><a href="login.php">LOGIN</a></li>
                <!-- <li><a href="signup.php">SIGNUP</a></li> -->
            </ul>
        </nav>
        <!-- Header content here -->
    </header>
    <main>
        <section id="signup">
            <div class="container">
                <h2>Signup</h2>
                <form action="signup.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Register</button>
                </form>

                
                
            </div>
        </section>
    </main>
    <footer>
        <!-- Footer content here -->
    </footer>
</body>
</html>
