<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/portfolio.css">
    <script src="/js/portfolio.js"></script>
    <title>Martin Hwang Resume</title>
</head>
<body onload="displayWordpress()">
<?php
include('header.php');
?>
<nav id="secondaryNav">
    <ul>
        <li><a href="#" onclick="displayWordpress()">WORDPRESS</a></li>
        <li><a href="#" onclick="displayMean()">MEAN</a></li>
    </ul>
</nav>
<div>
    <p id="p">
        <script> displayWordpress(); </script>
        <p id="wordpress" class="portfolio"></p>
        <p id="mean" class="portfolio"></p>
    </p>
</div>
<footer><p>&copy Martin Hwang</p></footer>
</body>
