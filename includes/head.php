<?php 
    require('connection.php');

    if($_SERVER['HTTP_HOST'] == "localhost") {
        $home = "//" . $_SERVER['HTTP_HOST']. "/sites/wee-read";
    } else {
        $home = "//" . $_SERVER['HTTP_HOST'].'';
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176283134-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-176283134-1');
</script>

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
            <li><a href="<?php print $home ?>/pages/for-schools">for schools/centres</a></li>
            <li><a href="<?php print $home ?>/pages/contact.php">contact</a></li>
            <!-- Dropdown -->
            <!-- Hide this if mobile -->
            <?php if(isset($_SESSION['email'])) { ?>
                <div class="dropdown">
                    <a class="secondary-btn" href="<?php print $home ?>/pages/profile.php">Profile</a>
                    <div class="dropdown-content">
                        <a href="<?php print $home ?>/pages/profile.php">Dashboard</a>
                        <a href="<?php print $home ?>/pages/logout.php">Sign Out</a>
                    </div>
                </div>
            <?php } else { ?>
                <li><a class="secondary-btn" href="<?php print $home ?>/pages/login.php">Log In</a></li>
            <?php } ?>
            <!-- Show this if mobile -->
                <span class="mobile">
                    <?php if(isset($_SESSION['email'])) { ?>
                        <hr>
                        <li><a href="<?php print $home ?>/pages/profile.php">Dashboard</a></li>
                        <li><a href="<?php print $home ?>/pages/logout.php">Sign Out</a></li>
                    <?php } ?>
                </span>
            
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
</div>
<div class="wrapper">
