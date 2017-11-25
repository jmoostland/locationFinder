<?php
session_start();

include 'connection.php';
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Collection</title>

        <script src="functions.js"></script>
        <style>
            #painting{
                justify-content:space-around;
                width:220px;
                margin-top:70px;
                flex-direction: row;
                margin-left: 280px;
                margin-right: 15px;
            }
        </style>
    </head>
    <body>
        <form>
            <input onClick="indexButton()" type="button" Value="LOCATION FINDER">
        </form>
        <form>
            <!--<input onClick="indexButton()" type="button" Value="HOME">-->
            <input onClick="locationButton()" type="button" value="LOCATION">
            <input onClick="collectionButton()" type="button" Value="COLLECTION">
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
    echo "<img id='painting' src=" . $row['images_painting'] . ">";
//    mysqli_free_result($result);
}

//echo "<img id='painting' src=" . $row['images_painting'] . " style='width:200px'>";
?>