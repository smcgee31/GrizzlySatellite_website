<?php
$baseUrl = '//' . $_SERVER['HTTP_HOST'] . substr( __DIR__ , strlen($_SERVER['DOCUMENT_ROOT'])) . '/';
?><!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Grizzly Satellite, Inc.</title>
        <link rel='stylesheet' href='<?php echo $baseUrl; ?>unitegallery/css/unite-gallery.css' type='text/css' />
        <link rel='stylesheet' href='<?php echo $baseUrl; ?>unitegallery/themes/default/ug-theme-default.css' type='text/css' />
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>style.css">
    </head>
    <body>
        <header class="headerContainer">
            <div class="headerLogo"><a href="<?php echo $baseUrl; ?>"></a></div>
            <div class="social-yp"></div>
            <div class="social-li"></div>
            <div class="social-tw"></div>
            <div class="social-fb"></div>
            
            <a class="cta" href="<?php echo $baseUrl; ?>order/">Get satellite TV</a>
            <div class="headerNav">
                <ul>
                    <li>
                        <a href="<?php echo $baseUrl; ?>about/" title="Meet Us">Meet Us</a>
                    </li>
                    <li>
                        <a href="<?php echo $baseUrl; ?>services/" title="Our Services">Our Services</a>
                    </li>
                    <li>
                        <a href="<?php echo $baseUrl; ?>gallery/" title="Quality Gallery">Quality Gallery</a>
                    </li>
                </ul>
            </div>
        </header>

