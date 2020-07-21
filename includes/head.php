<?php 
    if($_SERVER['HTTP_HOST'] == "localhost") {
        $home = "//" . $_SERVER['HTTP_HOST']. "/sites/wee-read";
    } else {
        $home = "//" . $_SERVER['HTTP_HOST'].'/~alex';
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php print $home ?>/css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Wee Read</title>
</head>
<body>
<div class="navbar">
    <nav>
        <div class="logo">
            <a href="<?php print $home ?>"><img src="<?php print $home ?>/images/logos/wee-read-logo.svg" alt="Wee Read logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="<?php print $home ?>/pages/wee-read">wee read</a></li>
            <li><a href="<?php print $home ?>/pages/pee-wee-read">pee wee read</a></li>
            <li><a href="<?php print $home ?>/pages/contact.php">contact</a></li>
            <?php if(isset($_SESSION['email'])) { ?>
                <div class="dropdown">
                    <a class="secondary-btn" href="<?php print $home ?>/pages/profile.php">Profile</a>
                    <div class="dropdown-content">
                        <a href="<?php print $home ?>/pages/logout.php">Logout</a>
                    </div>
                </div>
            <?php } else { ?>
                <li><a class="secondary-btn" href="<?php print $home ?>/pages/login.php">Log In</a></li>
            <?php } ?>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
</div>
<div class="wrapper">
