<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/school.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Schools</title>
</head>
</style>
<body onload="setInterval(duck, 1000)">

<?php include 'view/header.php';?>

    <div id="sel">
            <select name="schools" id="schools" onchange="fetchSchool(this.value)">
                    <option value="" disabled selected hidden>Choose school district</option>
                    <option value="1080">1080</option>
                    <option value="1081">1081</option>
                    <option value="1082">1082</option>
                    <option value="1083">1083</option>
                </select>
    </div>

    <table id="table">

    </table>

    <div id="duck"></div>

    <?php include 'view/footer.php';?>
    
</body>
<script type="text/javascript" src="js/table.js"></script>
<script type="text/javascript" src="js/move.js"></script>
</html>