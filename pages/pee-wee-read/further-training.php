<?php 
    include('../../includes/head.php');

    // $sql = "SELECT * FROM users WHERE email=?";
    // $stmt = mysqli_stmt_init($connection);
    // $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    // mysqli_stmt_prepare($stmt, $sql);
    // mysqli_stmt_bind_param($stmt, "s", $user);
    // mysqli_stmt_execute($stmt);
    // $result = mysqli_stmt_get_result($stmt);
    
    // $row = mysqli_fetch_array($result);

    // if($row['wee_read_status'] == 6) {
    //     $wee_read_status = 7;
    //     $sql = "UPDATE users SET wee_read_status=? WHERE email=?";
    //     $stmt = mysqli_stmt_init($connection);        

    //     mysqli_stmt_prepare($stmt, $sql);
    //     mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
    //     mysqli_stmt_execute($stmt);
    // }
?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="cyan center medium-heading mt-3">Thank you for choosing to continue learning</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="center mt-5">
        <div class="resources d-flex">
            <div class="small-card">
                <img src="<?php print $home ?>/images/icons/clipboard-outline.svg" alt="Clipboard icon">
                <a href="volunteer" class="button">Volunteer</a>
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
                <a href="volunteer" class="primary-btn">Continue to further training ></a>
            </div>
        </div>
</div>
<?php include('../../includes/footer.php'); ?>
