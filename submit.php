<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 1: Create the database if it doesn't exist
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql_create_db)) {
    // echo "Database created successfully or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db($dbname);

// Step 2: Create the contact table if it doesn't exist
$sql_create_table = "
CREATE TABLE IF NOT EXISTS contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";

if (mysqli_query($conn, $sql_create_table)) {
    // echo "Table contact created successfully or already exists.<br>";
} else {
    die("Error creating table: " . $conn->error);
}

    
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

// Insert the data into the table
$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully.";
} else {
    die("Error inserting data: " . $conn->error);
}



$conn->close();
?>














