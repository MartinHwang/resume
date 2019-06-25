<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/main.css" rel="stylesheet">
        <title>Martin Hwang Resume</title>
    </head>
    <body>
        <?php
            $uri = $_SERVER['REQUEST_URI'];
            include('php/header.php');
            switch ($uri)
            {
                case '/':
                    return
                        include ('php/resume.php');
                    break;
                case '/index.php':
                    return
                        include ('php/resume.php');
                    break;
            }
        ?>
    </body>
</html>
