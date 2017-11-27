  
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
            
             function artButton(a) {
                var x = document.getElementById("img");
                console.log(x);
//                x = location.href = "painting.php?vraagnummer="+a;
                x = location.href = "painting.php?id="+a;
            }