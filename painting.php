<?php
session_start();
include 'connection.php';
?>

<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="buttonOpmaak.css">
        <script src="functions.js"></script>
        <style>
            #index{
                font-family:Arial;
                font-size: 150px;
                border-radius:15px;
                background:gainsboro;
                padding-left: 110px;
                padding-right: 110px;
                position: fixed; left: 0; top: 10px;
            }

            #buttonloc{
                padding: 15px 32px;
                margin: 80px 50px;
                border-radius:10px;
                background: whitesmoke;
                box-shadow: 5px 5px 2px #333333;
            }

            #buttoncol{
                padding: 15px 32px;
                border-radius:10px;
                background: whitesmoke;
                box-shadow: 5px 5px 2px #333333;
            }
            #buttonreg{
                padding: 15px 32px;
                margin: 80px 50px;
                border-radius:10px;
                background: whitesmoke;
                box-shadow: 5px 5px 2px #333333;
            }

        </style>
    </head>
    <body>
        <form>
            <header><input id="index" onClick="indexButton()" type="button" Value="LOCATION FINDER"></header>
            <button type="button" id="buttonloc" onclick="locationButton()">LOCATION</button>
            <button type="button" id="buttoncol" onclick="collectionButton()">COLLECTION</button>
            <button type="button" id="buttonreg" onclick="registrationButton()">ADD NEW ARTWORK</button>
        </form>
        <?php
        $con = new mysqli('localhost', 'root', '', 'kunst');
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
            $id = $_REQUEST['id']; //zie ook function artButton


        $sql = sprintf("select * from kunstwerk where id = '%d'", $id);
        $result = $con->query($sql);
        $row = mysqli_fetch_array($result);
        
        $sql = "SELECT * FROM `linktable` WHERE sign_id = '".$row['sign_id']."' ";
        $result2 = $con->query($sql);
        if ($row2 = $result2->fetch_assoc()) {
            echo "Location:" . $row2['location_id'] . "<br>";
        }
        
        $zoekIdSchilderij = "";

            echo "Artwork ID:" . $row['sign_id'] . "<br>" . " Title:" . $row['title'] . "<br>" . "Artist:" . $row['artist'] . "<br>" . "Year:" . $row['year'] . "<br>";
            echo "<td><a href=delete.php?id=" . $row['id'] . ">Delete</a><td>" . "<br>";
            echo "<img onmouseover='bigPainting(this)' onmouseout='normalPainting(this)' id='painting' onclick='artButton(" . $row['id'] . ")' src=" . $row['images_painting'] . ">";
            $zoekIdSchilderij = $row['sign_id'];

        $_SESSION['zoekIdSchilderij'] = $zoekIdSchilderij;
        ?>
        
        <p id="change"></p>
        <form method="GET" action="edit.php" id="changeLoc" onchange="changeSubmit">
            <select name="location_id">
                <option value = "Entrance">Entrance</option>
                <option value = "Foyer">Foyer</option>
                <option value = "Cafe">Cafe</option>
                <option value = "Shop">Shop</option>
                <option value = "Stockroom">Stockroom</option>
            </select>
            <input type=submit>


            //<?php
//            if (isset($_REQUEST['sign_id'])) {
//                $inloggen = new mysqli('localhost', 'root', '', 'kunst');
//                $sign = $_REQUEST ['sign_id'];
//                $location_id = $_REQUEST ['location_id'];
//                $sql = "UPDATE `linktable` SET `location_id`='Entrance' WHERE `location_id`='Foyer'";
//                $inloggen->query($sql);

//                while ($row = mysqli_fetch_array($result)) {
//                    echo "<tr>";
//                    echo "<td>" . $result['location_id'] . "</td>";
//                    echo "<td>" . $result['sign_id'] . "</td>";
//                    echo "<td><a href=edit.php?location_id=" . $row['location_id'] . ">Edit</a><td>";
//                }
//            }
       

//            while ($row = mysqli_fetch_array($result)) {
//                echo "Location:" . $row['location_id'] . "<br>";
//                echo "<td><a href=edit.php?location_id=" . $row['location_id'] . ">Edit</a><td>";
//                echo "<img id='painting' onclick='updateButton(" . $row['location_id'] . ")' src=" . $row['images_painting'] . ">";
//            }
//            ?>
        </form>      
    </body>

</html>


