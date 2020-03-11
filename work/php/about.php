<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About this site</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body onload="setInterval(duck, 1000)">

<?php include 'view/header.php';?>

<article>

<h1>About</h1>

<p>
    This website is part of the course <a href="https://www.hkr.se/kurs/DA377B/kursplan">DA377B</a>, 
    which is a web development course. 
</p>

<p>
    This website is a part of the course and to display the different sections of it. This website includes a small
    introduction about me, reflections for every section and this page which explains a little about the site.
    <br><br>
    This course is about web development. Currently, only the basics of web developemnt has been taught and
    therefore, the website will develop over times.
    <br><br>
</p>

<p>This is the repo to the course git on <a href="https://github.com/Webbprogrammering/websoft">GitHub</a></p>
<p>This is the repo to the my forked git on <a href="https://github.com/mmadrus/websoft">GitHub</a></p>
<img src="img/web-development.png" alt="Web Development">

</article>

<div id="duck"></div>

<?php include 'view/footer.php';?>


</body>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/move.js"></script>
</html>
