<html>
    <head> 
        <script src="functions.js"></script>
        <style>
            body {
                font-family:Arial;
                display:block;
                background-repeat: no-repeat;
                background-size: cover;
                background-color: gray;
            }
            header{
                color: graytext;
                text-align: center;
                font-family:Arial;
                font-size: 100px;
                letter-spacing: 5px;
                padding-top: 50px;
                padding-bottom: 50px; 
            }
            .index{
                font-family:Arial;
                font-size: 150px;
                border-radius:15px;
                background:gainsboro;
                padding-left: 110px;
                padding-right: 110px;
                position: fixed; left: 0; top: 10px;
            }
            #painting{
                justify-content:space-around;
                width:250px;
                margin-top:30px;
                flex-direction: row;
                margin-left: 180px;
                margin-right: 15px;
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
                /*margin: 80px 50px;*/
                border-radius:10px;
                background: whitesmoke;
                box-shadow: 5px 5px 2px #333333;
            }
        </style>
    </head>
    <body>
        <form>
            <header><input class="index" onClick="indexButton()" type="button" Value="LOCATION FINDER"></header>
            <button type="button" id="buttonloc" onclick="locationButton()">LOCATION</button>    
            <button type="button" id="buttoncol" onclick="collectionButton()">COLLECTION</button>
        </form>
    </body>
</html>

