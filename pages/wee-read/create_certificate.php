<?php
require('../../includes/connection.php');
require('../../includes/functions.php');
checkIfLoggedIn();
include('../../includes/head.php');

$sql = "SELECT * FROM users WHERE email=?";
$stmt = mysqli_stmt_init($connection);
$user = mysqli_real_escape_string($connection, $_SESSION['email']);

mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $user);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_array($result);

// Thanks to Fr0z3n for this solution: https://stackoverflow.com/questions/14517094/aligning-php-generated-image-dynamic-text-in-center

$image = @imagecreatefromjpeg('../../files/certificates/wee-read-certificate.jpg');

// Create some colors
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

// The text to draw
$text = $row['full_name'];

$uploads_dir = '../../files/certificates/generated_certificates/';
$font = realpath('../../PTSans-Regular.ttf');
$font_size = 120;
$angle = 45;

//Save image to the generated_certificates folder with the user's name
$name = $uploads_dir.str_replace(' ', '_', strtolower($row['full_name'])).'_wee_read_certificate'.".png";

// Get image Width and Height
$image_width = imagesx($image);  
$image_height = imagesy($image);

// Get Bounding Box Size
$text_box = imagettfbbox($font_size,$angle,$font,$text);

// Get Text Width and Height
$text_width = $text_box[2]-$text_box[0];
$text_height = $text_box[7]-$text_box[1];

// Calculate coordinates of the text
$x = ($image_width/2) - ($text_width/2) - '150px';
$y = ($image_height/2) - ($text_height/2) + '150px';

// Add the text
imagettftext($image, $font_size, 0, $x, $y, $black, $font, $text);

imagepng($image, $name, 9);
imagedestroy($image);

?>

<?php include('../../includes/footer.php'); ?>