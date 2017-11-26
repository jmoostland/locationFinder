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
                background-color: black;
                font-family:Arial;
                background-image:url("unreal.jpg");
                display:block;
                position:fixed; left: 0; top: 0;
                background-repeat: no-repeat;
                /*background-size: cover;*/
                background-size: 700px;
                background-position-x: 450px;
                background-position-y: 200px;
                
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