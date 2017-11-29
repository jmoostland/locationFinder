<?php
session_start();

include 'connection.php';
include 'dry.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Entrance</title>
    </head>


<?php
$con = new mysqli('localhost', 'root', '', 'kunst');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

//$sql = "SELECT `sign_id` FROM `linktable` WHERE`location_id`='Entrance'"; //laat de sign_id zien van de kunstwerken die op deze locactie zijn te vinden
//$result = $con->query($sql);
//echo "<tr>";
//for ($x = 0; $x < $result->num_rows; $x++) {
//    $row = $result->fetch_assoc();
//    echo $row['sign_id'];
//    echo "<br>";
//}


$sql = "SELECT `images_painting`
FROM `kunstwerk`
WHERE EXISTS (SELECT `location_id` FROM `linktable` WHERE`location_id`='Entrance'
AND `kunstwerk`.`sign_id`=`linktable`.`sign_id`)";
$result = $con->query($sql);
for ($x = 0; $x < $result->num_rows; $x++) {
    $row = $result->fetch_assoc();
    echo "<img id='painting' src=".$row['images_painting'].">";

for ($p = 0; $p < $result->num_rows; $p++) {
    $row = $result->fetch_assoc();
    echo "<img id='painting' onclick='artButton(".$row['change'].")' src=" . $row['images_painting'] . ">";
}
}







//if(isset($_REQUEST["change"])){
//    $change=$_REQUEST["change"];
//    $query= mysqli_query("select *from linktable where sign_id=$change");
//    $row=mysql_fetch_array($query);
//}

//if(isset($_REQUEST['update'])){    
//    $mode = $_REQUEST['location_id'];
//    $sql = "update linktable set location_id = '".$mod."' ";
//    mysqli_query($sql);
//}

//UPDATE `linktable` SET `location_id`='entrance' WHERE `location_id`='foyer'
?>

    <body>
<form name='location' method="POST" action="">
<!--<select name="maintenance_mode">
  <option value = "Entrance">Entrance</option>
  <option value = "Foyer">Foyer</option>
  <option value = "Cafe">Cafe</option>
  <option value = "Shop">Shop</option>
</select>
<button type="submit" name="update">Change Location</button>-->

</form>
    </body>
</html>


