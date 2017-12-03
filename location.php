<?php
session_start();
include 'connection.php';
include 'dry.php';

$con = new mysqli('localhost', 'root', '', 'kunst');
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
                font-family:Arial;
                display:block;
            }
            img{
                 float: left;
                 margin-left: 80px;
                 margin-right: 50px;
                 border-radius:15px;
            }
            p:hover{
                color: lightgray;
            }
        </style>
    </head>
    <body>
        <a> <img src="unreal.jpg" width="745" alt="Gallery" usemap="#locationmap">
            <map name="locationmap">
                <area class="hovershape" shape="rect" coords="250,250,90,90" href="cafe.php" alt="Cafe">
                <area shape="rect" coords="450,150,330,390" href="foyer.php" alt="Foyer">
                <area shape="rect" coords="50,300,230,590" href="entrance.php" alt="Entrance">
                <area shape="rect" coords="650,230,430,390" href="shop.php" alt="Shop">
            </map></a>
        <p>Use the map to go to the different locations.</p>
    </body>
</html>