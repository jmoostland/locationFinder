<?php
session_start();
include 'connection.php';
include 'dry.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Collection</title>
        <link rel = "stylesheet" type = "text/css" href="buttonOpmaak.css">  
        <script src="functions.js"></script>
    </head>
    <body>
        <form name="iets" action="painting.php" method="GET"></form>
    </body>
</html>
<?php
$con = new mysqli('localhost', 'root', '', 'kunst');

$sql = "SELECT * FROM `kunstwerk`"; //bij de echo zeg je wat je uit kunstwerk wilt hebben, het is niet nodig om dit hier te specificeren.
$result = $con->query($sql);

for ($p = 0; $p < $result->num_rows; $p++) {
    $row = $result->fetch_assoc();
    echo "<img id='painting' onclick='artButton(".$row['id'].")' src=" . $row['images_painting'] . ">";
}
?>