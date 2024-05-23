<?php

// Database connection parameters
$host = 'localhost:3306'; // Update this with your actual host
$dbname = 'zzp_project'; // Update this with your actual database name
$username = 'root'; // Update this with your actual database username
$password = ''; // Update this with your actual database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set PDO attributes
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Disable emulation of prepared statements
    
    // Optionally, set character encoding
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    // Handle database connection errors
    die("Connection failed: " . $e->getMessage());
}

?>

?>
