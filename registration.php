

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
    $information = $_REQUEST ['information'];
    $materials = $_REQUEST ['materials'];
    $medium = $_REQUEST ['medium'];
    $sql = "INSERT INTO `kunstwerk` (`sign_id`, `title`, `artist`, `year`,`images_painting`,`information`,`materials`,`medium`) VALUES ('$sign', '$title', '$artist', '$year','$images_painting', '$information', '$materials', '$medium')";
    $inloggen->query($sql);
}
//   foreach ($materials as $mat){}
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
        <table cellspacing="2" cellpadding="2" border="0">
            <p><strong>Insert Artwork</strong></p><br><br>
            <tr>
                <td>Art ID</td><td> <input type="text" name="artId" required><br></td>
            </tr>
            <tr>
                <td>Title</td><td> <input type="text" name="title" required><br></td>
            </tr>
            <tr>
                <td>Artist</td><td> <input id="artistname" onkeyup="onKeyUpp()" type="text" name="artist" required><br></td>
            </tr>
            <tr>
                <td>Year</td><td> <input type="text" name="year" required><br></td>
            </tr>
            <tr>
                <td>Select Photo</td><td><input type='file' name='images_painting' size='10'><br></td>
            </tr>
            <tr> 
                <td>Materials</td><td><input type="checkbox" name='materials' value="Oil">Oil<br>
                <input type="checkbox" name='materials' value="Photo">Photo<br>
                <input type="checkbox" name='materials' value="Other">Other<br></td>
            </tr>
            <tr> 
                <td>Medium</td><td><input type="radio" name="medium" value="Painting"> Painting<br>
                <input type="radio" name="medium" value="Work on paper"> Work on paper<br>
               <input type="radio" name="medium" value="Other"> Other<br></td>
            </tr>
            <tr>
                <td>More information</td><td><textarea type='text' rows="4"cols="20" name='information' ></textarea><br></td>
            </tr>
            <tr>
                <td><input type="submit" name="registration" value="Insert"><br><br></td>
            </tr>
        </table></form>



        <?php
        if ($_FILES) {
            $images_painting = $_FILES['images_painting']['name'];
            move_uploaded_file($_FILES['images_painting']['tmp_name'], $images_painting);
            echo "Uploaded image '$images_painting'<br><img src='$images_painting'>";
        }
        ?>

    </body>
</html>