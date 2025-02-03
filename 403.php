<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbidden Access</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            color: #ff0000;
            font-size: 48px;
        }

        .container p {
            font-size: 18px;
            color: #333;
        }

        .container a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            font-size: 16px;
        }

        .container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>403 Forbidden</h1>
    <p>Sorry, you don't have permission to access this page.</p>
    <p>Go back to the <a href="index.php">homepage</a> or contact your administrator if you believe this is a mistake.</p>
</div>

</body>
</html>

