<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jotnotes_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `notes` WHERE `SenderID` ='".$_POST['ID']."'";

$line = $conn->query($sql);
$box = [];
while($row = $line->fetch_assoc()){
        array_push($box,$row['Message']);
    }
    echo json_encode($box);
    
?>
