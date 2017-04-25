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



$sql = "SELECT * FROM `users`";
$logins = $conn->query($sql);



if(isset($_GET['user'])){
    $users = [];
    $pass = [];
    $ID = [];
    $index = 0;
    while($row = $logins->fetch_assoc()){
        array_push($users,$row['Username']);
        array_push($pass,$row['Password']);
        array_push($ID,$row['ID']);
    }

    $selected = false;  
    for($i = 0; $i < count($users);$i++){
        if($_GET['user'] == $users[$i] && $_GET['pass'] == $pass[$i]){
            header("Location: index.php?ID=".$ID[$i]);
            $selected = true;
        }
    }
    if(!$selected){
    echo "<div class='w3-panel w3-red'>
            <h3>Error</h3>
            <p>Invalid UserName or Password</p>
        </div>";
    }
}



?>