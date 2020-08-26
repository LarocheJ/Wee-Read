
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

    if($row['completed_wee_read_volunteer'] == 'no') {
        $completed_wee_read_volunteer = 'yes';
        $sql = "UPDATE users SET completed_wee_read_volunteer=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $completed_wee_read_volunteer, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan medium-heading">Congratulations!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="mb-3">
        <p>You have completed the <em>wee read</em> training. Please use what you have learned and the resources provided to guide you in the powerful <em>wee read</em> process.</p>
        <p>Thank you for committing to come to the school every week and help children to become confident and joyful readers!</p>
    </div>
    <h1 class="center cyan">What&#39;s next?</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">

    <div class="d-grid col-3 resources">
        <div class="small-card">
            <img src="<?php print $home ?>/images/icons/certificate.svg" alt="Certificate icon">
            <a href="certificate.php" class="button">Certificate of Completion</a>
        </div>
        <div class="small-card">
            <img src="<?php print $home ?>/images/icons/resources.svg" alt="Resources icon">
            <a href="#" class="button">Additional Resources</a>
        </div>
        <div class="small-card">
            <img src="<?php print $home ?>/images/icons/map.svg" alt="Map icon">
            <a href="https://calgaryreads.com/programs/wee-read/" class="button" target="_blank">Find a school near you</a>
        </div>
    </div>

    <hr class="my-5">

    <div class="d-flex align-center justify-between">
        <a href="#" class="primary-btn" id="goBack">< Back</a>
        <a href="../volunteer" class="primary-btn">Back to volunteer home page</a>
        <a href="../../profile.php" class="primary-btn">Back to profile</a>
    </div>
    
</div>

<?php include('../../../includes/footer.php'); ?>