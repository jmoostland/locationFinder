<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Location</title>
        <link rel = "stylesheet" type = "text/css" href="buttonOpmaak.css">   
        <script src="functions.js"></script>
        <style>
            #col{
                margin-top: 100 px;
            }
            body {
                /*background-color: black;*/
                font-family:Arial;
                background-image:url("unreal.jpg");
                display:block;
                /*position:fixed; left: 0; top: 0;*/
                background-repeat: no-repeat;
                background-size: 800px;
                background-position-x: 450px;
                background-position-y: 200px;
            }
            #index{
                font-family:Arial;
                font-size: 150px;
                border-radius:15px;
                background:gainsboro;
                padding-left: 110px;
                padding-right: 110px;
                position: fixed; left: 0; top: 10px;
            }
            #buttoncol{
                padding: 15px 32px;
                margin: 80px 50px;
                border-radius:10px;
                background: whitesmoke;
                box-shadow: 5px 5px 2px #333333;
            }
            a{
                margin: 80px 50px;
            }

        </style>
    </head>
    <body>
        <form>
            <header><input id="index" onClick="indexButton()" type="button" Value="LOCATION FINDER"></header>
            <button type="button" id="buttoncol" onclick="collectionButton()">COLLECTION</button>
            
            <a href="foyer.php">Foyer</a>
        </form>

    </body>

</html>

<?php
$con = new mysqli('localhost', 'root', '', 'kunst');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$sql = "SELECT * FROM `linkTable`";
$result = $con->query($sql);
for ($p = 0; $p < $result->num_rows; $p++) {
    $row = $result->fetch_assoc();
    echo "Location:" . $row['location_id'] . "<br>"."Art ID:" . $row['sign_id'] . "<br>";
}


//
//$sql = "SELECT * FROM `location`";
//$result = $con->query($sql);
//for ($p = 0; $p < $result->num_rows; $p++) {
//    $row = $result->fetch_assoc();
//    echo "Location:" . $row['location'] . "<br>";
//}
?>