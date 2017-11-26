<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Location</title>
        <link rel = "stylesheet" type = "text/css" href="buttonOpmaak.css">   
        <script src="functions.js"></script>
        <style>
            #col{
                margin-top: 100 px;
            }
            body {
                /*background-color: black;*/
                font-family:Arial;
                background-image:url("unreal.jpg");
                display:block;
                /*position:fixed; left: 0; top: 0;*/
                background-repeat: no-repeat;
                background-size: 800px;
                background-position-x: 450px;
                background-position-y: 200px;
            }
            #index{
                font-family:Arial;
                font-size: 150px;
                border-radius:15px;
                background:gainsboro;
                padding-left: 110px;
                padding-right: 110px;
                position: fixed; left: 0; top: 10px;
            }
            #buttoncol{
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
            <button type="button" id="buttoncol" onclick="collectionButton()">COLLECTION</button>
        </form>

    </body>

</html>