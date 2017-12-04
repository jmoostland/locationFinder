
<?php
session_start();
include 'dry.php'
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Start page</title>   
        <script src="functions.js"></script>
        <style>
            #wit {
                background: white;
                width: 450px;
                height: 450px;
                background-position: center;
                border-radius:15px;
                position: absolute;
                top: 250px;
                left: 300px;
                background-image:url("unreal.jpg");
                background-size: 450px;
                background-repeat: no-repeat;
            }
            #grijs{
                background:gainsboro;
                width: 450px;
                height: 450px;
                background-position: center;
                border-radius:15px;
                position: absolute;
                background-image:url("imagePainting/warmerdam-lift.jpg");
                background-size: 400px;
                top: 250px;
                left: 800px;
            }
            a{
                font-family:Arial;
                color: black; 
            }
            #buttonloc{
                padding: 15px 25px;
                margin: 400px 300px;
                border-radius:15px;
                background:gainsboro;
            }
            #buttoncol{
                padding: 15px 25px;
                margin: 400px 300px;
                border-radius:15px;
                background: whitesmoke;
            }
        </style>
    </head>
    <body>
        <div id="wit">
            <button type="button" id="buttonloc" onclick="locationButton()">LOCATION</button>
        </div>  
        <div id="grijs">
            <button type="button" id="buttoncol" onclick="collectionButton()">COLLECTION</button>
        </div> 
    </body>
</html>
