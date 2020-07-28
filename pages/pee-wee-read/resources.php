<?php 

    include('../../includes/head.php'); 

    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $row = mysqli_fetch_array($result);

    // if($row['pee_wee_read_status'] == 10) {
    //     $wee_read_status = 11;
    //     $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
    //     $stmt = mysqli_stmt_init($connection);        

    //     mysqli_stmt_prepare($stmt, $sql);
    //     mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
    //     mysqli_stmt_execute($stmt);
    // }

?>

<div class="container">
<h1 class="cyan center medium-heading mt-3">Congratulations, <?php print $row['full_name']; ?>!</h1>
    <p class="center cyan large-body-txt">Now that you have finished the module, here is what you can do next:</p>
    <div class="center mt-5">
        <div class="d-grid col-3 resources">
            <div class="small-card">
                <!-- TEMPORARY ICON -->
                <img src="<?php print $home ?>/images/icons/clipboard-outline.svg" alt="Survey icon">
                <a href="#" class="button">Complete and off-site survey</a>
            </div>
            <div class="small-card">
                <!-- TEMPORARY ICON -->
                <img src="<?php print $home ?>/images/icons/ribbon-outline.svg" alt="Certificate icon">
                <a href="#" class="button">Download certificate of completion</a>
            </div>
            <div class="small-card">
                <!-- TEMPORARY ICON -->
                <img src="<?php print $home ?>/images/icons/book-outline.svg" alt="Resources icon">
                <a href="#" class="button">Access Additional resources</a>
            </div>
        </div>
    </div>
    <!-- <a href="tips-for-reading-aloud-to-children.php" class="primary-btn float-left">< Back</a>
    <a href="../profile.php" class="primary-btn float-right" id="goBack">Back to profile</a> -->
</div>
<div class="cyan-bg py-5 mt-5">
        <div class="center white">
            <div class="container-small">
                <h2 class="medium-heading">Want to know more?</h2>
                <p class="large-body-txt">Etiam rhoncus eros et leo laoreet tincidunt. Aliquam molestie quis eros ut fringilla. Nullam luctus viverra elit ac dignissim. Proin hendrerit odio ut neque aliquet, id dictum neque porta</p>
                <a href="#" class="primary-btn">Continue to further training ></a>
            </div>
        </div>
</div>

<?php include('../../includes/footer.php'); ?>