<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/flags.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Flags</title>
</head>
<body onload="setInterval(duck, 1000)">
<?php include 'view/header.php';?>

    <div id="flags">
        <div id="germany">
            <label for="Germany" onclick="showFlag('ger-flag')">Germany</label>
            <div id="ger-flag">
                    <div style="background: black;"></div>
                    <div style="background: red;"></div>
                    <div style="background: yellow;"></div>
            </div>
        </div>
        <div id="france">
            <label for="France" onclick="showFlag('fr-flag')">France</label>
            <div id="fr-flag">
                    <div style="background:blue;"></div>
                    <div style="background: white;"></div>
                    <div style="background: red"></div>
            </div>
        </div>
        <div id="austria">
            <label for="Austria" onclick="showFlag('au-flag')">Austria</label>
            <div id="au-flag">
                    <div style="background: red;"></div>
                    <div style="background: white;"></div>
                    <div style="background: red;"></div>
            </div>
        </div>
    </div>

    <div id="duck"></div>

    <?php include 'view/footer.php';?>
</body>
<script type="text/javascript" src="js/flag.js"></script>
<script type="text/javascript" src="js/move.js"></script>
</html>