<?php
session_start();
?>
<html>
    <head>
                <meta charset="UTF-8">
        <title>Location</title>

        <script src="functions.js"></script>
        <style>
            body {
                font-family:Georgia;
                background-image:url("plattegrond.jpg");
                display:block;
                position: fixed; left: 0; top: 0;
                background-repeat: no-repeat;
                background-size: cover;
                background-color: black;
            }
        </style>
    </head>
    <body>
        <form>
            <input onClick="indexButton()" type="button" Value="LOCATION FINDER">
</form>
         <form>
            <!--<input onClick="indexButton()" type="button" Value="HOME">-->
            <input onClick="locationButton()" type="button" value="LOCATION">
            <input onClick="collectionButton()" type="button" Value="COLLECTION">
        </form>
    </body>
    
</html>