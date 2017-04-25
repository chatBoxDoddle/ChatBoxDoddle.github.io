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
$tag= '';
if(isset($_POST['Tag'])){
    $tag = $_POST['Tag'];
}
$sql = "INSERT INTO `notes` (`ID`, `Sender`, `Message`, `GroupID`, `SenderID`,`TagID`) VALUES (NULL, '".$_POST['name']."', '".$_POST['messages']."', '".$_POST['group']."', '".$_POST['ID']."','".$tag."');";

$conn->query($sql);
    
    echo $sql;


$conn->close();
?>
