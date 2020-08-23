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

    if($row['wee_read_status'] == 6) {
        $wee_read_status = 7;
        $sql = "UPDATE users SET wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }
?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="cyan center medium-heading mt-3">Congratulations, <?php print $row['full_name']; ?>!</h1>
    <div class="center mt-5">
        <div class="d-grid col-3 resources">
            <div class="small-card">
                <img src="<?php print $home ?>/images/icons/survey.svg" alt="Survey icon">
                <a href="https://www.surveymonkey.com/r/BXFGMJC" target="_blank" class="button">Completion Survey</a>
            </div>
            <div class="small-card">
                <img src="<?php print $home ?>/images/icons/certificate.svg" alt="Certificate icon">
                <a href="certificate.php" class="button">Certificate of Completion</a>
            </div>
            <div class="small-card">
                <img src="<?php print $home ?>/images/icons/resources.svg" alt="Resources icon">
                <a href="resources.php" class="button">Additional Resources</a>
            </div>
        </div>
    </div>
    <p class="center cyan large-body-txt my-3">Now that you have finished the module, here is what you can do next&#58;</p>
    
</div>

<div class="cyan-bg mb-5 whats-next">
    <div class="center white">
        <div class="container-small">
            <h2 class="medium-heading">What&rsquo;s next?</h2>
            <p class="large-body-txt my-2">Now that you&rsquo;ve completed the wee
read module, you have the opportunity to train as a <em>wee read</em> volunteer and read with students ages 5-7 in a school near you!</p>
            <a href="volunteer" class="primary-btn">Continue to <em>wee read</em> Volunteer Training ></a>
        </div>
    </div>
</div>

<div class="d-flex justify-center mt-5">
    <a href="tips-for-reading-aloud-to-children.php" class="primary-btn float-left mt-5" >< Back</a>
</div>

<?php include('../../includes/footer.php'); ?>
