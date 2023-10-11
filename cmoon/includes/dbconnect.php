<?php
date_default_timezone_set('Asia/Kolkata');
 

$servername = "localhost";
// $user_name =  "manasdental_care";
// $password = "manas@123##";
$user_name =  "root";
$password = "";
$db_name="manas_dental_care";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $user_name, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo 'Connected to the database';
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
