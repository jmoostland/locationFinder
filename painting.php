<?php
session_start();

include 'connection.php';
?>

<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="buttonOpmaak.css">
        <script src="functions.js"></script>
        <style>
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
            
            #buttoncol{
                padding: 15px 32px;
                border-radius:10px;
                background: whitesmoke;
                box-shadow: 5px 5px 2px #333333;
            }
        </style>
    </head>
    <body>
        <form>
            <header><input id="index" onClick="indexButton()" type="button" Value="LOCATION FINDER"></header>
            <button type="button" id="buttonloc" onclick="locationButton()">LOCATION</button>
            <button type="button" id="buttoncol" onclick="collectionButton()">COLLECTION</button>
        </form>

    </body>

</html>
<?php
echo'hello';

$con = new mysqli('localhost', 'root', '', 'kunst');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT (`art_id`, `title`, `artist`, `year`)  FROM `kunstwerk`";
$result = $con->query($sql);


if ($row = "SELECT `images_painting` FROM `kunstwerk`") {
//        echo $row=array "Artwork ID:" . $row['art_id']. " Title:". $row['title']. "Artist:". $row['artist']."Year:".$row['year']."<br>";
} else {
    echo "0 results";  //array van maken
}
$con->close();
?>

