<?php 
define("STAGING", $_SERVER["DOCUMENT_ROOT"]);
define("PROD", 'http://' . $_SERVER["HTTP_HOST"] .'/~alex/');
$env = PROD; //change to PROD if live