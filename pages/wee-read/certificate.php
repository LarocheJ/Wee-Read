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
?>
<div class="container">
    <div class="certificate">
        <h1><?php print $row['full_name']?></h1>
    </div>

    <form action="" method="post" class="d-flex justify-between">
        <a class="primary-btn" href="complete.php">< Back</a>
        <a class="primary-btn" href="../../files/certificates/generated_certificates/<?php print str_replace(' ', '_', strtolower($row['full_name'])).'_certificate' ?>.jpg" download>Download certificate</a>
    </form>

</div>

<?php include('../../includes/footer.php'); ?>