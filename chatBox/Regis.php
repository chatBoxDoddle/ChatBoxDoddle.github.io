<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="blank.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>JotNotes</title>
</head>

<body>
    <?php include "Controllers/RegisController.php" ?>
    <div class="w3-row">
        <div class="w3-display-middle">
        <div class="w3-container" style="margin:5px">
            <h2 class="w3-text-white name" style="text-align:center">JotNotes  <i class="fa fa-envelope-open-o" aria-hidden="true"></i></h2>
        </div>
            <div class="w3-container w3-light-gray scrollbar login " style="padding-top:15px; border-radius:25px; min-width:350px;">
                <div class="w3-container" style="margin:5px">
                    <h3 class="w3-text-white" style="text-align:center">Register</h3>
                </div>
                <form name="myForm" action="Regis.php" onsubmit="return validateRegForm()" method="post">
                    <span class="w3-col s12 w3-text-white">Username<input class="w3-input"  type="text" name="user" required/></span>
                    <span class="w3-col s12 w3-text-white">Password<input class="w3-input" type="password" name="pass" required /></span>
                    <span class="w3-col s12 w3-text-white">Confirm Password<input class="w3-input" type="password" name="passC" required /></span>
                    <span class="w3-col s12 w3-text-white">Email<input class="w3-input" type="text" name="email" requried/></span>
                    <button type="submit" class="w3-btn w3-blue" style="margin:10px">Submit <i class="fa fa-check" aria-hidden="true"></i></button>
                </form>
                <a href="login.php"><button class="w3-btn w3-blue" style="margin:10px;">Back to Login <i class="fa fa-refresh" aria-hidden="true"></i></button></a>
            </div>
            
            
        </div>

    </div>


</body>
<script src="verification.js"></script>

</html>