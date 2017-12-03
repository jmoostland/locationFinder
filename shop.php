<?php
session_start();
include 'connection.php';
include 'dry.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Shop</title>
    </head>
    <body></body>
</html>
<?php
$con = new mysqli('localhost', 'root', '', 'kunst');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT `images_painting`
FROM `kunstwerk`
WHERE EXISTS (SELECT `location_id` FROM `linktable` WHERE`location_id`='Shop'
AND `kunstwerk`.`sign_id`=`linktable`.`sign_id`)";
$result = $con->query($sql);
for ($x = 0; $x < $result->num_rows; $x++) {
    $row = $result->fetch_assoc();
    echo "<img id='painting' src=" . $row['images_painting'] . ">";
}
?>