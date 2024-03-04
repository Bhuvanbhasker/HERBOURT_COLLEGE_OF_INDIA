 <?php
$servername = "localhost";  // Change this if your database is hosted elsewhere
$username = "root";
$password = "";
$dbname = "signup_page";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 

