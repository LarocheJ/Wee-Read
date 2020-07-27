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
    <h1 class="medium-heading cyan center">Congratulations, <?php print $row['full_name']; ?>!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">

    <img class="d-block margin-auto img-medium" src="<?php print $home ?>/images/tukay/tukay_rocket.png" alt="">
    <p class="center my-3">You have completed the pee wee read training. Thank you for committing to help children become confident and joyful readers!</p>

    <h2 class="cyan center">What’s next?</h2>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="center mb-3">
        <p>Check out the Resources</p>
        <p>Complete the Survey</p>
        <p>Print out your Certificate of Completion</p>
        <p>Sign up for our post-training emails! We’ll never spam!</p>
        <p><a href="volunteer">Train how to volunteer in an Early Learning or Child Care Centre</a></p>
    </div>

    <a href="key-points.php" class="primary-btn float-left">< Back</a>
    <a href="../profile.php" class="primary-btn float-right">Go back to profile</a>
</div>

<?php include('../../includes/footer.php'); ?>