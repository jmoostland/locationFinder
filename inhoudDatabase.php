<?php
session_start();
include 'connection.php';
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Collection</title>

        <script src="functions.js"></script>
    </head>
    <body>
        <form>
            <input onClick="indexButton()" type="button" Value="HOME">
            <input onClick="locationButton()" type="button" value="LOCATION">
            <input onClick="collectionButton()" type="button" Value="COLLECTION">
        </form>
<!--        <img src="imagePainting/sauterm_tucsonstake.jpg">-->
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
$sql = "SELECT * FROM `kunstwerk`";
//   $result=mysqli_query($con,$sql);
//   $row=$result->mysqli_num_rows;
//    $rows = mysqli_num_rows($result); 
//   echo "<img src=imagePainting/sauterm_tucsonstake.jpg>";
//$row= mysqli_fetch_assoc($result);
//for ($show=0;$show<$rows;$show){
//    $result->data_seek($show);
//    echo "Title:".$row['title'];


if ($result = mysqli_query($con, $sql)) {

    while ($row = mysqli_fetch_assoc($result)) {        //lus en maakt van een rij resultaten een associatieve array.
        echo "Title:".$row['title']."<br>";
        echo "Artist:".$row['artist']."<br>";
        echo "Year:".$row['year']."<br>";
        echo "<img src=".$row['images_painting']." style='width:200px'><br>";
        echo "<br>";
        echo "<br>";
    }
    mysqli_free_result($result);
}
?>


