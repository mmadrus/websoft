<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Me</title>
    <link rel="stylesheet" href="css/me.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body onload="setInterval(duck, 1000)">

<?php include 'view/header.php';?>

    <article>

        <h1>My report page in the course DA377B</h1>

        <img src="img/profilbild.jpg" alt="Me on an image">

        <p>
            My name is Matteo Madrusan, born and raised in Kristianstad. I'm currently studying my last year in uni 
            and hope to get a bachelor degree in computer science in the summer. I started programming 2 1/2 years ago
            when I started at uni and have had a blast doing it since. On my spare time, I usually try to produce 
            music when I do have the time for it. <br><br>
            I have previosuly been active in sports and played for the Swedish national team in football (not soccer) but
            had to quit because of a back injury. So I have been spending most of my spare time in front of a screen since.
            <br><br>
            I started to learn some web development during my spare time in december 2019 and like it so far. I'm excited for
            the course and hopefully I will learn some usefull skills to be able to become a Front-end developer.

        </p>

    </article>

    <div id="duck"></div>

    <?php include 'view/footer.php';?>

</body>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/move.js"></script>
</html>
