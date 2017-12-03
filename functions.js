
function indexButton() {
    var x = document.getElementById("buttonloc");
    x = location.href = "index.php";
}

function locationButton() {
    var x = document.getElementById("buttonloc");
    x = location.href = "location.php";
}

function collectionButton() {
    var x = document.getElementById("buttoncol");
    x = location.href = "collection.php";
}

function registrationButton() {
    var x = document.getElementById("buttonreg");
    x = location.href = "registration.php";
}

function artButton(a) {
    var x = document.getElementById("img");
    console.log(x);
    x = location.href = "painting.php?id=" + a;
}

function onKeyUpp() {
    var x = document.getElementById("artistname");
    x.value = x.value.toUpperCase();
}

function send() {
    alert("Succesfull");
}

function bigPainting(x) {
    x.style.width = "300px";
}

function normalPainting(x) {
    x.style.width = "200px";
}

//function changeSubmit(){
//    var x=document.getElementById("changeLoc").value;
//    document.getElementById("change").innerHTML="You selected: "+x;
//}