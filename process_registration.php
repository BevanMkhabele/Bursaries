<?php
// Database connection details
$host = "localhost"; // Use "localhost" for a database on the same server
$dbname = "user_input"; // Updated to match your database name
$username = "route"; // Updated to match your database username (route)
$password = ""; // Database password is blank

try {
    // Create a new PDO (PHP Data Objects) instance for database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve form data from POST request
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $idNumber = $_POST['idNumber'];
    $phoneNumber = $_POST['phoneNumber'];

    // SQL query to insert data into the "user_input" table
    $sql = "INSERT INTO user_input (name, surname, idNumber, phoneNumber) VALUES (:name, :surname, :idNumber, :phoneNumber)";

    // Prepare and execute the SQL statement with the provided data
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':surname' => $surname,
        ':idNumber' => $idNumber,
        ':phoneNumber' => $phoneNumber,
    ]);

    // Successful registration message
    echo "Registration complete. You will be sent an SMS to confirm your application.";

} catch (PDOException $e) {
    // Handle database connection or query errors
    echo "Error: " . $e->getMessage();
}
?>
