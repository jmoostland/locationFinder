<?php
session_start();

include 'connection.php';
include 'dry.php';

if (isset($_REQUEST['artId'])) {
    $inloggen = new mysqli('localhost', 'root', '', 'kunst');
    $sign = $_REQUEST ['artId'];
    $title = $_REQUEST ['title'];
    $artist = $_REQUEST ['artist'];
    $year = $_REQUEST ['year'];
    $images_painting = $_FILES['images_painting']['name'];
    $sql = "INSERT INTO `kunstwerk` (`sign_id`, `title`, `artist`, `year`,`images_painting`) VALUES ('$sign', '$title', '$artist', '$year','$images_painting')";
    $inloggen->query($sql);
}
?>

<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="buttonOpmaak.css">
        <script src="functions.js"></script>
        <style>
            input{
                font-family:Arial;
            }
        </style>
    </head>
    <body>
        <form>
            <header><input id="index" onClick="indexButton()" type="button" Value="LOCATION FINDER"></header>
            <!--            <button type="button" id="buttonloc" onclick="locationButton()">LOCATION</button>
                        <button type="button" id="buttoncol" onclick="collectionButton()">COLLECTION</button>-->
        </form>

        <form action="registration.php" method="POST" enctype='multipart/form-data' onsubmit="send()">

            <p><strong>Insert Artwork</strong></p><br><br>
            Art ID <input type="text" name="artId" required><br>
            Title <input type="text" name="title" required><br>
            Artist <input id="artistname" onkeyup="onKeyUpp()" type="text" name="artist" required><br>
            Year <input type="text" name="year" required><br>
            <!--<textarea name="noteContents" id="noteContents"></textarea><br>--> nog toevoegen aan table
            <td>Select Photo: </td><td><input type='file' name='images_painting' size='10'>
                <input type="submit" name="registration" value="Insert"><br><br>
        </form>

        <?php
        if ($_FILES) {
            $images_painting = $_FILES['images_painting']['name'];
            move_uploaded_file($_FILES['images_painting']['tmp_name'], $images_painting);
            echo "Uploaded image '$images_painting'<br><img src='$images_painting'>";
        }
        ?>

    </body>
</html>