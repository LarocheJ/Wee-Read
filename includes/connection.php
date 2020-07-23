<?php
// CHANGE THIS WHEN ALTERNATING BETWEEN LOCAL DEVELOPMENT AND UPLOADING TO THE LIVE WEBSITE
// ============================
// LOCAL
// ============================
$server = "localhost";
$username = "root";
$password = "";
$db = "alex_wee_read";
// ============================
// LIVE
// ============================
// $server = "localhost";
// $username = "alex_jimmy";
// $password = "jimthewebguy";
// $db = "alex_wee_read";
// ============================

$connection = mysqli_connect($server, $username, $password, $db);

if(!$connection){
    die(mysqli_connect_error());
}

if(!isset($_SESSION)) {
    session_start();
}