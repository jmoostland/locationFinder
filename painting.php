<?php
session_start();

include 'connection.php';
?>

<html>
    <head>
          <script src="functions.js"></script>
    </head>
    <body>
                <form>
            <input onClick="indexButton()" type="button" Value="LOCATION FINDER">
            <input onClick="locationButton()" type="button" value="LOCATION">
            <input onClick="collectionButton()" type="button" Value="COLLECTION">
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


if($row="SELECT `images_painting` FROM `kunstwerk`" ){
//        echo $row=array "Artwork ID:" . $row['art_id']. " Title:". $row['title']. "Artist:". $row['artist']."Year:".$row['year']."<br>";
} else {
    echo "0 results";  //array van maken
}
$con->close();
?>

