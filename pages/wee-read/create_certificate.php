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

header('Content-type: image/jpeg');
$font = realpath('../../PTSans-Regular.ttf');
$image = imagecreatefromjpeg("../../files/certificates/wee-read-certificate.jpg");
$color = imagecolorallocate($image, 51, 51, 102);
imagettftext($image, 60, 0, 880, 188, $color, $font);
$name = $row['full_name'];
$file_name = str_replace(' ', '_', strtolower($row['full_name'])).'_certificate';
imagettftext($image, 100, 0, 1200, 1450, $color, $font, $name);
imagejpeg($image, "../../files/certificates/generated_certificates/$file_name.jpg");
imagejpeg($image);
imagedestroy($image);


?>

<script>
    window.location.href = 'certificate.php?certificate_downloaded';
</script>

<?php include('../../includes/footer.php'); ?>