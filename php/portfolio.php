<head>
    <meta charset="UTF-8">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/portfolio.css">
    <script src="/js/portfolio.js"></script>
    <title>Martin Hwang Resume</title>
</head>
<?php
include('header.php');
?>
<body onload="displayWordpress()">
<nav id="secondaryNav">
    <ul>
        <li><a href="#" onclick="displayWordpress()">WORDPRESS</a></li>
        <li><a href="#" onclick="displayMean()">MEAN</a></li>
    </ul>
</nav>
<main>
    <script> displayWordpress(); </script>
    <p id="wordpress" class="portfolio"></p>
    <p id="mean" class="portfolio"></p>
</main>
<footer><p>&copy Martin Hwang</p></footer>
</body>
