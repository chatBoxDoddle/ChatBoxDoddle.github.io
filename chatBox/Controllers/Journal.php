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
$sql;
if($_GET['group'] == "Private"){
    $sql = "SELECT * FROM `notes` WHERE `TagID` ='".$_GET['ID']."' OR `Sender` ='".$_GET['ID']."'";
}else{
    $sql = "SELECT * FROM `notes` WHERE `GroupID` ='".$_GET['group']."' OR `TagID` ='".$_GET['ID']."' OR `Sender` ='".$_GET['ID']."'";
}
$messages = $conn->query($sql);




while($row = $messages->fetch_assoc()){
        if($row['TagID'] == $_GET['ID'])
            echo "<p><span class='w3-tag w3-teal w3-round-xxlarge' style='padding:5px; padding-right:10px'>@".$row['Sender']."</span> ".$row['Message']."</p>";
        else if($row['Sender'] == $_GET['ID']){
                $tagg = '';
                if($row['TagID'] != ''){
                    $tagg = "@".$row['TagID'];
                }
            echo "<p><span class='w3-tag w3-khaki w3-round-xxlarge' style='padding:5px; padding-right:10px'>@".$row['Sender']."</span><span class='w3-text-teal'> ".$tagg."</span> ".$row['Message']."</p>";
        }
        else
            echo "<p><span class='w3-tag w3-light-gray w3-round-xxlarge' style='padding:5px; padding-right:10px'>@".$row['Sender']."</span> ".$row['Message']."</p>";
    }

?>
