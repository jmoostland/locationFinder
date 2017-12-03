<?php
session_start();

include 'connection.php';
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Collection</title>
        <link rel = "stylesheet" type = "text/css" href="buttonOpmaak.css">  
        <script src="functions.js"></script>
        <style>
/*            #painting{
                justify-content:space-around;
                width:250px;
                margin-top:30px;
                flex-direction: row;
                margin-left: 180px;
                margin-right: 15px;
            }*/
            #index{
                font-family:Arial;
                font-size: 150px;
                border-radius:15px;
                background:gainsboro;
                padding-left: 110px;
                padding-right: 110px;
                position: fixed; left: 0; top: 10px;
            }
            #buttonloc{
                padding: 15px 32px;
                margin: 80px 50px;
                border-radius:10px;
                background: whitesmoke;
                box-shadow: 5px 5px 2px #333333;
            }
        </style>
    </head>
    <body>
        <form name="iets" action="painting.php" method="GET">
            <header><input id="index" onClick="indexButton()" type="button" Value="LOCATION FINDER"></header>
            <button type="button" id="buttonloc" onclick="locationButton()">LOCATION</button>
        </form>
    </body>
</html>
<?php

$con = new mysqli('localhost', 'root', '', 'kunst');


$sql = "SELECT * FROM `kunstwerk`"; //bij de echo zeg je wat je uit kunstwerk wilt hebben, het is niet nodig om dit hier te specificeren.
$result = $con->query($sql);

for ($p = 0; $p < $result->num_rows; $p++) {
    $row = $result->fetch_assoc();
    echo "<img id='painting' onclick='artButton(".$row['id'].")' src=" . $row['images_painting'] . ">";
//    mysqli_free_result($result);
}

?>

