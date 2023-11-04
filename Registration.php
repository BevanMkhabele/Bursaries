<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Styles as in the original code */
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <p>Fill in the registration form below:</p>
    
    <form action="process_registration.php" method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>
        
        <label for="idNumber">South African ID Number:</label>
        <input type="text" id="idNumber" name="idNumber" required>
        
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>
        
        <input type="submit" value="Submit" class="button">
    </form>

    <script>
        // JavaScript for the "Get Started" link
        document.getElementById("getStartedLink").addEventListener("click", function() {
            alert("Welcome to Bursaries South Africa! Let's get started.");
        });
    </script>
</body>
</html>

