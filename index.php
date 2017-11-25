
<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Start page</title>
        <link rel = "stylesheet" type = "text/css" href="buttonOpmaak.css">   
        <script src="functions.js"></script>
        <style>
            

            body {
                font-family:Georgia;
                background-image:url("paard.jpg");
                display:block;
                position: fixed; left: 0; top: 0;
                background-repeat: no-repeat;
                background-size: cover;
                background-color: black;
            }
            #wit {
                background: whitesmoke;
                width: 450px;
                height: 450px;
                background-position: center;
                border-radius:15px;
                position: absolute;
                top: 250px;
                left: 300px;
            }
            #grijs{
                background:gainsboro;
                width: 450px;
                height: 450px;
                background-position: center;
                border-radius:15px;
                position: absolute;
                top: 250px;
                left: 800px;
            }

            a{
                font-family:Georgia;
                color: black; 
            }
            #buttonloc{
                padding: 15px 32px;
                margin: 400px 300px;
                border-radius:15px;
                background:gainsboro;
            }
            #buttoncol{
                padding: 15px 32px;
                margin: 400px 300px;
                border-radius:15px;
                background: whitesmoke;
            }
/*            form{
                font-family:Georgia;
                color: black; 
                padding: 15px 32px;
                margin: 100px 100px;
                border-radius:15px;
                background:gainsboro;
            }*/
        </style>
    </head>
    <body>
        <!--        <?php
        $search = $_REQUEST['search'];
        ?>
                <form action="index.php" method="Post"
                      <textarea name="search "></textarea><input type="submit" value="Search"/>
                </form>-->
<form>
            <input onClick="indexButton()" type="button" Value="LOCATION FINDER">
</form>
        <form>
            <!--<input onClick="indexButton()" type="button" Value="LOCATION FINDER">-->
            <input onClick="locationButton()" type="button" value="LOCATION">
            <input onClick="collectionButton()" type="button" Value="COLLECTION">
        </form>


        <div id="wit">
            <button type="button" id="buttonloc" onclick="locationButton()">Location</button>
        </div>  


        <div id="grijs">
            <button type="button" id="buttoncol" onclick="collectionButton()">Collection</button>
        </div> 


    </body>
</html>
