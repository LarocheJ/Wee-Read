<?php 
    if(file_exists('../dev.txt')) {
        $home = "//" . $_SERVER['HTTP_HOST']. "/sites/wee-read";
    } else {
        $home = "//" . $_SERVER['HTTP_HOST'].'/~alex/';
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Wee Read</title>
</head>
<body>
<div class="navbar">
    <nav>
        <div class="logo">
            <a href="<?php print $home ?>"><img src="images/logos/wee-read-logo.svg" alt="Wee Read logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="wee-read">wee read</a></li>
            <li><a href="pee-wee-read">pee wee read</a></li>
            <li><a href="contact">contact</a></li>
            <li><a class="secondary-btn" href="#">Profile</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
</div>