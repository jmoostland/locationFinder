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
                font-family:Arial;
                display:block;
/*   
                background-repeat: no-repeat;
                background-size: 800px;
                background-position-x: 450px;
                background-position-y: 200px;*/
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
            img{
                 float: left;
                 margin-left: 80px;
                 margin-right: 50px;
                 border-radius:15px;
            }
            p:hover{
                color: lightgray;
            }
        </style>
    </head>
    <body>
        <form>
            <header><input id="index" onClick="indexButton()" type="button" Value="LOCATION FINDER"></header>
            <button type="button" id="buttoncol" onclick="collectionButton()">COLLECTION</button>
        </form>

        <a> <img src="unreal.jpg" width="745" alt="Gallery" usemap="#locationmap">
            <map name="locationmap">
                <area class="hovershape" shape="rect" coords="250,250,90,90" href="cafe.php" alt="Cafe">
                <area shape="rect" coords="450,150,330,390" href="foyer.php" alt="Foyer">
                <area shape="rect" coords="50,300,230,590" href="entrance.php" alt="Entrance">
                <area shape="rect" coords="650,230,430,390" href="shop.php" alt="Shop">
            </map></a>
        <p>Use the map to go to the different locations.</p>
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
    echo "Location:" . $row['location_id'] . "<br>" . "Art ID:" . $row['sign_id'] . "<br>";
}


//
//$sql = "SELECT * FROM `location`";
//$result = $con->query($sql);
//for ($p = 0; $p < $result->num_rows; $p++) {
//    $row = $result->fetch_assoc();
//    echo "Location:" . $row['location'] . "<br>";
//}
?>