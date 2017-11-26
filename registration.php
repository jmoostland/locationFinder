<?php
session_start();

include 'connection.php';

if (isset($_REQUEST['artId'])) {
    $inloggen = new mysqli('localhost', 'root', '', 'kunst');
   $art_id = $_REQUEST ['artId'];
   $title = $_REQUEST ['title'];
   $artist = $_REQUEST ['artist'];
   $year = $_REQUEST ['year'];
    $sql = "INSERT INTO `kunstwerk` (`art_id`, `title`, `artist`, `year`) VALUES ('$art_id', '$title', '$artist', '$year')";
  $inloggen->query($sql);
}

?>

<html>
    <head>
        <style>
            input{
                font-family:Arial;
            }
        </style>
        
      
        
    </head>
    <body>
        
        <form action="registration.php" method="POST">
            <p><strong>Insert Artwork</strong></p><br><br>
            Art ID <input type="text" name="artId" required><br>
            Title <input type="text" name="title" required><br>
            Artist <input type="text" name="artist" required><br>
            Year <input type="text" name="year" required><br>
            <input type="submit" name="registration" value="Insert"><br><br>
        </form>
        
                        <?php
//                if ($_FILES) {
//                    $filename = $_FILES['filename']['name'];
//                    move_uploaded_file($_FILES['filename']['tmp_name'], $filename);
//                    echo "Uploaded image '$filename'<br><img src='$filename'>";
//                }
                ?>
        
    </body>
</html>