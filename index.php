<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="/css/main.css" rel="stylesheet">
        <title>Martin Hwang Resume</title>
    </head>
    <body>
        <?php
            include('php/header.php');
            $uri = $_SERVER['REQUEST_URI'];
            switch ($uri)
            {
                case '/index.php':
                    return include ('php/resume.php');
                    break;
                case '/php/recommendations.php':
                    return include ('php/recommendations.php');
                    break;
            }

        ?>
    </body>
</html>
