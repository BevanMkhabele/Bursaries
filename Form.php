<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            color: #333;
            font-family: arial;
        }
        
        p {
            text-align: center;
            color: #777;
            font-family: arial;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        
        label {
            display: block;
            margin: 10px 0;
        }
        
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        .button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <p>Fill in the registration form below:</p>
    
    <form action="Retrieve.php" method="POST">
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
        document.getElementById("getStartedLink").addEventListener("click", function() {
            alert("Welcome to Bursaries South Africa! Let's get started.");
        });
    </script>
</body>
</html>
