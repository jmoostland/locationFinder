function showHeader(){
$returnString = <<<HEADSTRING
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
            </form>

<!--HEADSTRING;
    return $returnString;
}-->