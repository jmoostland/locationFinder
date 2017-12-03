<?php
session_start();
include 'connection.php';
include 'dry.php';

$con = new mysqli('localhost', 'root', '', 'kunst');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$zoekIdSchilderij = $_SESSION['zoekIdSchilderij'];
$sql = sprintf("UPDATE `linktable` SET `location_id` = '%s' WHERE `sign_id` = '%s' " , $_REQUEST['location_id'] , $zoekIdSchilderij ) ;

if (mysqli_query($con, $sql)) {
        header("location:collection.php");
} else {
    echo "This painting can't be moved.";
}
?>