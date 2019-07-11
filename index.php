<!DOCTYPE html>
<html lang="en">
    <?php
    $validPages = ['resume', 'recommendations', 'portfolio', 'coCurricularRecord'];
    $pages = "";
    $uri = $_SERVER['REQUEST_URI'];
    if($uri == "/" or $uri == "/index.php"){

        $pages = "resume";

    }else{
        $pages = $_GET['p'];
    }
    $cssPath ='css/'. $pages.'.css';
    $jsPath = 'js/'. $pages. '.js';
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/styles.css" rel="stylesheet">
        <link href="/css/sideMenu.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php echo '<link rel="stylesheet" type="text/css" href="'. $cssPath . '"/>'. "\n";?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/sideMenu.js"></script>
        <?php echo '<script type="text/javascript" src="'. $jsPath . '"/>'. "\n";?>
        <script  src="js/portfolio.js"></script>
        <title>
            <?php
            if(in_array($pages, $validPages)){
                echo('Martin Hwang_'. ucfirst($pages));
            }else{
                echo 'Page not found';
            }
            ?>
        </title>
    </head>
    <body onload="displayWordpress()">
        <?php
            include('php/header.php');
            $phpPath ='php/'. $pages.'.php';
            if(in_array($pages, $validPages)){

                include($phpPath);

            }else{

                include('./php/404.php');
            }
        ?>

        <?php
        include ('php/footer.php');
        ?>
    </body>
</html>
