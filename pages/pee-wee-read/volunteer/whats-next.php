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

    if($row['completed_pee_wee_read_volunteer'] == 'no') {
        $completed_pee_wee_read_volunteer = 'yes';
        $sql = "UPDATE users SET completed_pee_wee_read_volunteer=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $completed_pee_wee_read_volunteer, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="spacer-50"></div>
<div class="container">
<h1 class="center cyan medium-heading">Congratulations!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="mb-3">
        <p>You have completed the <em>pee wee read</em> training. Please use what you have learned and the resources provided to guide you in the powerful <em>pee wee read</em> process.</p>
        <p>Thank you for committing to come to an early learning or child care centre every week to help children become confident and joyful readers!</p>
    </div>

    <h1 class="center cyan">What’s next?</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">

    <ul>
        <li>Check out the Resources</li>
        <li><a href="https://www.surveymonkey.com/r/BXFGMJC" target="_blank">Complete the Survey</a></li>
        <li>Sign up for our post-training emails! We’ll never spam!</li>
        <li>Find a centre near you to volunteer at or recommend one in your area to become a <em>pee wee read</em> location</li>   
        <li><a href="certificate.php">View your Certificate of Completion</a></li>
    </ul>

    <div class="d-flex align-center justify-between mt-3">
        <a href="" class="primary-btn mt-1" id="goBack">< Back</a>
        <a href="../volunteer" class="primary-btn mt-1">Back to volunteer home page</a>
        <a href="../../profile.php" class="primary-btn mt-1">Back to profile</a>
    </div>
    
</div>
<div class="spacer-50"></div>

<?php include('../../../includes/footer.php'); ?>