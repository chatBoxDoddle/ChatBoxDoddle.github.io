// Initialize Firebase
var config = {
    apiKey: "AIzaSyCbrjZHo-Aw-VJfxzj_S9LtaL1V7h5x61M",
    authDomain: "dbnotes-1eb7a.firebaseapp.com",
    databaseURL: "https://dbnotes-1eb7a.firebaseio.com",
    storageBucket: "dbnotes-1eb7a.appspot.com",
    messagingSenderId: "489618306160"
};
firebase.initializeApp(config);

var post = 0;
var clip = 0;
var check = 0;
var pop;


function init() {
    list_data(); //db needs setup time
}

function list_data() {
    firebase.database().ref('post').once('value').then(function(snapshot) {
        post = snapshot.val();
        for (x = 1; x <= post; x++) {
            firebase.database().ref('Tag' + (x)).once('value').then(function(snapshot) {
                document.getElementById("take").innerHTML += "<span class='w3-tag w3-teal logs'>" + snapshot.val() + "</span></br>";
            });
            check = post;
        }
    });

    pop = setInterval(readUserData, 1000);
}

function run(event) {
    var x = event.keyCode;
    if (x == 13)
        writeUserData();

}

function writeUserData() {
    post++;
    var database = firebase.database().ref();
    database.child("Tag" + post).set("@" + document.getElementById("user").value + ":" + document.getElementById("field").value);
    database.child("post").set(post);
    document.getElementById("field").value = "";

}

function cleanUserData() {
    post++;
    var database = firebase.database().ref();
    database.set("");
    database.child("post").set("0");
    document.getElementById("field").value = "";

}

function readUserData() {
    firebase.database().ref('post').once('value').then(function(snapshot) {
        clip = snapshot.val();
    });
    if (check < clip) {
        check = clip;
        firebase.database().ref('Tag' + (clip)).once('value').then(function(snapshot) {
            document.getElementById("take").innerHTML += "<span class='w3-tag w3-purple logs'>" + snapshot.val() + "</span></br>";
            var objDiv = document.getElementById("take");
            objDiv.scrollTop = objDiv.scrollHeight;
        });

    }

}


angular.module('peace', []).controller('personCtrl', function($scope) {
    $scope.firstName = "Alex";
});

init();