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

?>
<div class="container">

<iframe class="certificate_iframe" src="create_certificate.php" frameborder="0"></iframe>

<div class="certificate wee-read-volunteer">
    <h1><?php print $row['full_name']?></h1>
</div>

<div class="d-flex justify-between">
    <a class="primary-btn" href="congratulations.php">< Back</a>
    <a class="primary-btn" href="../../../files/certificates/generated_certificates/<?php print str_replace(' ', '_', strtolower($row['full_name'])).'_wee_read_volunteer_certificate' ?>.jpg" download>Download your certificate</a>
</div>

</div>

<?php include('../../../includes/footer.php'); ?>