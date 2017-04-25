function validateRegForm() {
    var user = document.forms["myForm"]["user"].value;
    var pass = document.forms["myForm"]["pass"].value;
    var passC = document.forms["myForm"]["passC"].value;
    var email = document.forms["myForm"]["email"].value;
    if (user == "") {
        alert("Username must be filled out");
        return false;
    }
    if (pass == "") {
        alert("Password must be filled out");
        return false;
    }
    if (pass !== passC) {
        alert("Passwords do not match");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (email.indexOf("@") < 0) {
        alert("Email must be Valid");
        return false;
    }
}

function validateLoginForm() {
    var user = document.forms["myForm"]["user"].value;
    var pass = document.forms["myForm"]["pass"].value;
    if (user == "") {
        alert("Username must be filled out");
        return false;
    }
    if (pass == "") {
        alert("Password must be filled out");
        return false;
    }
}