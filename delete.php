<?php
include 'connection.php';

$con = new mysqli('localhost', 'root', '', 'kunst');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql="DELETE FROM kunstwerk WHERE id='$_GET[id]'";

if(mysqli_query($con, $sql))
        header("refresh:1; url=collection.php");
else
    echo "This painting can't be deleted.";
?>

