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
            #painting{
                justify-content:space-around;
                width:250px;
                margin-top:30px;
                flex-direction: row;
                margin-left: 180px;
                margin-right: 15px;
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
        <form>
            <header><input id="index" onClick="indexButton()" type="button" Value="LOCATION FINDER"></header>
            <button type="button" id="buttonloc" onclick="locationButton()">LOCATION</button>
        </form>
    </body>

</html>

<?php
//
//     $sql = "SELECT * FROM `kunstwerk`";
//         $result=mysqli_query($con,$sql);
//         $row= mysqli_fetch_assoc($result);//maakt van een rij resultaten een associatieve array.
//    echo $sql;
//INSERT INTO `kunstwerk` (`id`, `art_id`, `title`, `artist`, `year`, `images_painting`) VALUES (NULL, '1JK', 'Achter glas', 'Johan van der Keuken', '1957', ''), (NULL, '1ZR', 'Cosmopolitans', 'Zeger Reyers', '2006', '');
//INSERT INTO `kunstwerk` (`id`, `art_id`, `title`, `artist`, `year`, `images_painting`) VALUES (NULL, '1MS', 'Tucson Stake', 'Martina Sauter', '2007', '\\xampp\\htdocs\\locationFinder\\imagePainting');
$con = new mysqli('localhost', 'root', '', 'kunst');


$sql = "SELECT `images_painting` FROM `kunstwerk`";
$result = $con->query($sql);

for ($p = 0; $p < $result->num_rows; $p++) {
    $row = $result->fetch_assoc();
    echo "<img id='painting' onclick='artButton()' src=" . $row['images_painting'] . ">";
//    mysqli_free_result($result);
}
?>