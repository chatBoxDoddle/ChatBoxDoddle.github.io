function Update() {
    $.get("Controllers/Journal.php", {
            ID: $("#user").val(),
            group: $("#group").val()
        },
        function(data, status) {
            $("#take").html(data);
            var objDiv = document.getElementById("take");
            objDiv.scrollTop = objDiv.scrollHeight;
        });


}

$("#group").change(function() {
    Update();
});

var color = [];
color[0] = "#0E2F44";
color[1] = "#0080ff";
color[2] = "#1a1aff";
color[3] = "#a0cfe4";
color[4] = "#49a9e1";
color[5] = "#6666FF";
color[6] = "#1919ff";
color[7] = "#000099";
color[8] = "#a0d2e1";
color[9] = "steelblue";

function changeback() {
    $("body").css({ backgroundColor: color[Math.floor((Math.random() * 9))] });
}

function Send() {
    if (validateIndexForm()) {
        if ($("#tag").val() != "") {
            $.post("Controllers/postdata.php", {
                    name: $("#user").val(),
                    messages: $("#message").val(),
                    ID: $("#ID").val(),
                    group: "Private",
                    Tag: $("#tag").val()
                },
                function(data, status) {
                    //alert(data);
                    var objDiv = document.getElementById("take");
                    objDiv.scrollTop = objDiv.scrollHeight;
                });
        } else {
            $.post("Controllers/postdata.php", {
                    name: $("#user").val(),
                    messages: $("#message").val(),
                    ID: $("#ID").val(),
                    group: $("#group").val(),
                    Tag: ""
                },
                function(data, status) {
                    //alert(data);
                    var objDiv = document.getElementById("take");
                    objDiv.scrollTop = objDiv.scrollHeight;
                });
        }
        document.getElementById("message").value = "";
    }
}

function run(event) {
    var x = event.keyCode;
    if (x == 13)
        Send();

}

var availableTags = [];

$.post("Controllers/Backup.php", {
        ID: $("#ID").val()
    },
    function(data, status) {
        availableTags = JSON.parse(data);
        $("#message").autocomplete({
            source: availableTags
        });
    });

function validateIndexForm() {
    var msg = $("#message").val();
    if (msg == "") {
        alert("No message to send");
        return false;
    }
    return true;
}

var upload = setInterval(Update, 3000);
var sway = setInterval(changeback, 10000);