<?php
session_start();
include 'connection.php';
include 'dry.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Collection</title>
        <script src="functions.js"></script>
    </head>
    <body></body>
</html>
<?php
$con = new mysqli('localhost', 'root', '', 'kunst');

$sql = "SELECT * FROM `kunstwerk`";
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


