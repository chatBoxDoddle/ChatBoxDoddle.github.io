<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,height=device-height initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="blank.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>JotNotes</title>
</head>

<body onload="Update()">
    <?php include "Controllers/indexController.php" ?>
    <div class="w3-container w3-blue head">
        
        <a href="login.php" style="float:right"><button  class="w3-btn w3-blue" style="margin:10px">Logout <i class="fa fa-close" aria-hidden="true"></i></button></a>
        <button  class="w3-btn w3-blue" style="margin:10px; float:right;"><?php echo "@".$User; ?> <i class="fa fa-user-o" aria-hidden="true"></i></button>
        <select  id="group" class="w3-btn w3-blue " style="margin:10px; float:right;">
            <option value="Public">Public</option>
            <option value="Onyx">Onyx</option>
            <option value="Sunfire">Sunfire</option>
            <option value="Horrius">Horrius</option>
            <option value="Zues">Zues</option>
            <option value="Private">Private</option>
        </select>
        <h2>JotNotes  <i class="fa fa-envelope-open-o" aria-hidden="true"></i></h2>
    </div>
    <div class="w3-container w3-white" style="margin:10px; margin-bottom:20px; padding:10px; height:300px; overflow-y: scroll;" id="take"></div>
    <div class="w3-container">

            <input type="hidden" id="user" value="<?php echo $User;?>"/>
            <input type="hidden" id="ID" value="<?php echo $ID;?>"/>
            <div class="ui-widget"><span class="w3-text-white">Message:<input class="w3-input " type="text" id="message" autocomplete="on" style="height:60px;" onkeydown="run(event)"/></span></div></br>
            <span class="w3-text-white">Tag: @<input class="w3-input" type="text" id="tag" style="width:30%" onkeydown="run(event)" /></span></br>
            <button id="send" class="w3-btn w3-blue" onclick="Send()">Send <i class="fa fa-check" aria-hidden="true"></i></button>
    </div>
    </div>

</body>
<script src="base.js"></script>

</html>