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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="modules/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/styles.css">
        <link rel="stylesheet" href="/css/sideMenu.css">
        <?php echo '<link rel="stylesheet" type="text/css" href="'. $cssPath . '">'. "\n";?>
        <script type="text/javascript" src="modules/jquery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="modules/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="js/sideMenu.js"></script>
        <?php echo '<script type="text/javascript" src="'. $jsPath . '"><script>'?>
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
            require('php/header.php');
            $phpPath ='php/'. $pages.'.php';
            if(in_array($pages, $validPages)){

                require($phpPath);

            }else{

                require('./php/404.php');
            }
        ?>

        <?php
        require ('php/footer.php');
        ?>
    </body>
</html>
