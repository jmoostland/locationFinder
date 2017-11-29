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

        $sql = "SELECT * FROM `linktable`";
        $result = $con->query($sql);
        if ($row = $result->fetch_assoc()) {
            echo "Location:" . $row['location_id'] . "<br>";
//    echo "<option value='" . $row['location_id'] . "'>" . $row['location_id'] . "</option>";
        }

        $id = $_REQUEST['id']; //zie ook function artButton
//        $location = $_REQUEST['location_id'];
//}
//echo $id;
        $sql = sprintf("select * from kunstwerk where id = '%d'", $id);

//echo $sql;
        $result = $con->query($sql);
//echo "<br>";
//var_dump($result);


        while ($row = mysqli_fetch_array($result)) {
            echo "Artwork ID:" . $row['sign_id'] . "<br>" . " Title:" . $row['title'] . "<br>" . "Artist:" . $row['artist'] . "<br>" . "Year:" . $row['year'] . "<br>";
            echo "<td><a href=delete.php?id=" . $row['id'] . ">Delete</a><td>" . "<br>";
            echo "<img onmouseover='bigPainting(this)' onmouseout='normalPainting(this)' id='painting' onclick='artButton(" . $row['id'] . ")' src=" . $row['images_painting'] . ">";
        }


        //<input type='button' class="edit_button" id="edit_button<?php echo $row['id']; 
        ?>" 
                 <!--value="edit" onclick="edit_row('<?php // echo $row['id'];   ?>');">-->


        <!--        if (isset($_POST['location'])){
                $location=$_POST['location'];
                if (mysql_query("))
                }-->


        ?>
        <!--<a href="painting.php"></a>-->
        <form method="POST" action="">
            <select name="location">
                <option value = "Entrance">Entrance</option>
                <option value = "Foyer">Foyer</option>
                <option value = "Cafe">Cafe</option>
                <option value = "Shop">Shop</option>
            </select>
            <button href=edit.php?location_id=" $row['location_id'] onclick="updateButton" type="submit" name="update">Change Location</button>




            <?php
            if (isset($_REQUEST['sign_id'])) {
                $inloggen = new mysqli('localhost', 'root', '', 'kunst');
                $sign = $_REQUEST ['sign_id'];
                $location_id = $_REQUEST ['location_id'];
                $sql = "UPDATE `linktable` SET `location_id`='Entrance' WHERE `location_id`='Foyer'";
                $inloggen->query($sql);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $result['location_id'] . "</td>";
                    echo "<td>" . $result['sign_id'] . "</td>";
                    echo "<td><a href=edit.php?location_id=" . $row['location_id'] . ">Edit</a><td>";
                }
            }

//                        echo "<td><a href=\"edit.php?id=$result[id]\">Edit</a></td>";
//}        
//            echo "<tr>";
//            echo "<td>".$res['name']."</td>";
//            echo "<td>".$res['age']."</td>";
//            echo "<td>".$res['email']."</td>";    
//            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>
            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
//        while($res = mysqli_fetch_array($result)) {         
//            echo "<tr>";
//            echo "<td>".$res['name']."</td>";
//            echo "<td>".$res['age']."</td>";
//            echo "<td>".$res['email']."</td>";    
//            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
//        }
//            while ($row = mysqli_fetch_array($result)) {
//                echo "Location:" . $row['location_id'] . "<br>";
//                echo "<td><a href=edit.php?location_id=" . $row['location_id'] . ">Edit</a><td>";
//                echo "<img id='painting' onclick='updateButton(" . $row['location_id'] . ")' src=" . $row['images_painting'] . ">";
//            }
            ?>
        </form>      
    </body>

</html>


