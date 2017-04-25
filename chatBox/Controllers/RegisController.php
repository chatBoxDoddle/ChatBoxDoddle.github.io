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






if(isset($_POST['user'])){
    $sql = "INSERT INTO `users` (`ID`, `Username`, `Password`, `Email`) VALUES (NULL, '".$_POST['user']."', '".$_POST['pass']."', '".$_POST['email']."')";

    if($conn->query($sql) === TRUE){
        echo "<div class='w3-panel w3-green'>
            <h3>Success</h3>
            <p>You Have Been Registered</p>
        </div>";
    }
    else{
        echo "<div class='w3-panel w3-red'>
            <h3>Error</h3>
            <p>You are Unable to Register with Username</p>
        </div>";
    }
    
}

$conn->close();

?>