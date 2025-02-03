<?php
date_default_timezone_set('Africa/Nairobi');
echo   "<link rel='stylesheet' href='css/styles.css'>";

$server = 'localhost';
$username = 'root';
$password ='';
$database = 'ecommerce';

#$conn=mysqli_connect($server,$username,$password,$database);
// Create the database connection
$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
}/* else {
    
    echo "Connection successful";
}*/

?>

