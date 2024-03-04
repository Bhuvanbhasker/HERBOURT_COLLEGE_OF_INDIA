<?php
include 'db_connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

echo "username is".$username;
// $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("sss", $username, $email, $password);

// if ($stmt->execute()) {
//     header("Location: login.php");
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $stmt->close();
// $conn->close();
echo "Hello";
?>