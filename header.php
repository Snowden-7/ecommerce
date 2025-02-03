<?php
include('connection.php');
#include('access.php');
session_start();



$current_user = isset($_SESSION['session_user']) ? $_SESSION['session_user'] : 'Unknown User';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f9; }
        .header { background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; }
        .top-nav { width: 100%; background-color: #333; color: white; display: flex; justify-content: center; }
        .top-nav ul { list-style: none; margin: 0; padding: 0; display: flex; }
        .top-nav li { border-right: 1px solid #444; }
        .top-nav li:last-child { border-right: none; }
        .top-nav a { color: white; text-decoration: none; padding: 15px 20px; display: block; }
        .top-nav a:hover { background-color: #575757; }
        .content { margin-top: 20px; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); }
        .loader { display: none; text-align: center; font-size: 16px; margin-top: 20px; }
    </style>
    <?php /*
    <script>
        let currentPage = ""; // Track the current page

        function loadPage(pageUrl) {
            if (currentPage === pageUrl) return; // Avoid reloading the same page
            const contentArea = document.getElementById("content");
            const loader = document.getElementById("loader");

            loader.style.display = "block"; // Show loader

            const xhr = new XMLHttpRequest();
            xhr.open("GET", pageUrl, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        contentArea.innerHTML = xhr.responseText;
                        currentPage = pageUrl; // Update current page
                    } else {
                        contentArea.innerHTML = "<p>Error loading page.</p>";
                    }
                    loader.style.display = "none";
                }
            };
            xhr.send();
        }

        document.addEventListener("DOMContentLoaded", function () {
            const links = document.querySelectorAll(".top-nav a");
            links.forEach(link => {
                link.addEventListener("click", function (e) {
                    e.preventDefault();
                    const pageUrl = this.getAttribute("href");
                    loadPage(pageUrl);
                });
            });

            document.getElementById("welcome").addEventListener("click", function(e) {
                e.preventDefault(); // Prevent default anchor behavior
                location.reload(); // Force page reload when "Home" is clicked
            });

            loadPage("welcome.php"); // Load default content
        });
    </script>*/?>
</head>
<body>
<div class="header">
    <div align="right">
        <?php 
            // Check if the user is logged in
            if (isset($_SESSION['username'])) {
                // Display the logged-in user's name and provide a link to the profile
                echo "Logged in as: " . htmlspecialchars($_SESSION['username']) . " | ";
                echo "<a href='profile.php' style='color: white;'>Profile</a>";
            } else {
                echo "Not Logged In";
            }
        ?>
    </div>
    <h1>Welcome to the Dashboard</h1>
</div>


    <!-- Top Navigation Links -->
    <div class="top-nav">
        <ul>
            <li><a href="admin.php">Home</a></li>
            <li><a href="org.php">Organization</a></li>
            <li><a href="employee.php">Employee</a></li>
            <li><a href="supplier.php">Supplier</a></li>
            <li><a href="pdt_cat.php">Pdt Cat</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="pdt_level.php">Pdt Level</a></li>
            <li><a href="purchase.php">Purchase</a></li>
            <li><a href="user_type.php">UserType</a></li>
            <li><a href="user.php">Users</a></li>
            <li><a class="active" href="logout.php" style="background-color: red;">Logout</a></li>
        </ul>
    </div>
