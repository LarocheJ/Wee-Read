<?php
require('../../../includes/connection.php');
require('../../../includes/functions.php');
checkIfLoggedIn();
include('../../../includes/head.php');

$sql = "SELECT * FROM users WHERE email=?";
$stmt = mysqli_stmt_init($connection);
$user = mysqli_real_escape_string($connection, $_SESSION['email']);

mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $user);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_array($result);

header('Content-type: image/jpeg');
$font = realpath('../../../PTSans-Regular.ttf');
$image = imagecreatefromjpeg("../../../files/certificates/wee-read-volunteer-certificate.jpg");
$color = imagecolorallocate($image, 51, 51, 102);
$name = $row['full_name'];
$file_name = str_replace(' ', '_', strtolower($row['full_name'])).'_wee_read_volunteer_certificate';
imagettftext($image, 100, 0, 1300, 1480, $color, $font, $name);
imagejpeg($image, "../../../files/certificates/generated_certificates/$file_name.jpg");
imagejpeg($image);

?>

<?php include('../../../includes/footer.php'); ?>