<?php 
    require('../includes/head.php'); 

    session_unset();
    session_destroy();
    header('Location: '.$home.'');