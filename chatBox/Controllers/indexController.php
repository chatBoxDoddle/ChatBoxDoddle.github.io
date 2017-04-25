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
if(isset($_GET['ID'])){
    $sql = "SELECT * FROM `users` WHERE `ID`  = ".$_GET['ID'];
    $users = $conn->query($sql);
    $row = $users->fetch_assoc();
    $User = $row['Username'];
    $ID = $row['ID'];
}
else{
    header("Location: login.php");
}

     


?>