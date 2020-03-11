<?php
/**
 * A page controller
 */
require "config.php";
require "connectDB.php";

// Get incoming values
$search = $_GET["search"] ?? null;
//var_dump($_GET);

if ($search) {
    // Connect to the database
    $db = connectDatabase($dsn);

    // Prepare and execute the SQL statement
    $sql = <<<EOD
SELECT
    *
FROM premierLeagueTable
WHERE
    Team LIKE '%{$search}%' 
    OR Pos LIKE '%{$search}%' 
    OR Pts LIKE '%{$search}%' 
    OR GD LIKE '%{$search}%' 
;
EOD;
    $stmt = $db->prepare($sql);
    $stmt->execute([$search]);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll();
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/search.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Search</title>
</head>
<body onload="setInterval(duck, 100)">
    <?php include 'view/header.php';?>

    <h1>Premier League</h1>

    <form>
        <p>
            <label>Search: 
                <input type="text" name="search" value="<?= $search ?>">
            </label>
        </p>
    </form>

    <?php if ($search) : ?>
        <table id="teamTable">
            <tr>
                <th>Pos</th>
                <th>Team</th>
                <th>+/-</th>
                <th>Pts</th>
            </tr>

        <?php foreach ($res as $row) : ?>
            <tr>
                <td><?= $row["Pos"] ?></td>
                <td><?= $row["Team"] ?></td>
                <td><?= $row["GD"] ?></td>
                <td><?= $row["Pts"] ?></td>
            </tr>
        <?php endforeach; ?>

        </table>
    <?php endif; ?>

    <div id="duck"></div>

    <?php include 'view/footer.php';?>
</body>
<script type="text/javascript" src="js/search.js"></script>
</html>