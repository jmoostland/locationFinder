<?php
session_start();
include 'connection.php';

$con = new mysqli('localhost', 'root', '', 'kunst');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$zoekIdSchilderij = $_SESSION['zoekIdSchilderij'];
//echo $zoekIdSchilderij;
//$sql="UPDATE FROM kunstwerk WHERE location_id='$_GET[location_id]'";
$sql = sprintf("UPDATE `linktable` SET `location_id` = '%s' WHERE `sign_id` = '%s' " , $_REQUEST['location_id'] , $zoekIdSchilderij ) ;

//echo  $sql ;
if (mysqli_query($con, $sql)) {
//        header("refresh:1; url=painting.php");
        header("location:collection.php");
} else {
    echo "This painting can't be deleted.";
}
?>


