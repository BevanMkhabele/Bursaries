<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "bursaries_data";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve user input from the form
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $idNumber = $_GET["idNumber"];
    $phoneNumber = $_GET["phoneNumber"];

    // SQL query to insert data into the UserInformation table
    $sql = "INSERT INTO UserInformation (name, surname, sa_id, phone_number) VALUES ('$name', '$surname', '$idNumber', '$phoneNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. Data has been stored in the database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

