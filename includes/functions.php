<?php 
function checkIfLoggedIn() {
    if($_SERVER['HTTP_HOST'] == "localhost") {
        $home = "//" . $_SERVER['HTTP_HOST']. "/sites/wee-read";
    } else {
        $home = "//" . $_SERVER['HTTP_HOST'].'';
    }

    if(!isset($_SESSION['email'])) {
        header('Location: '.$home.'/pages/login.php?error=not_authenticated');
        $_SESSION['message'] = 'You must log in first.';
    }
}