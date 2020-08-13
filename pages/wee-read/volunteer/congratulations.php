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
        <p>You have completed the <em>pee wee read</em> training. Please use what you have learned and the resources provided to guide you in the powerful <em>pee wee read</em> process.</p>
        <p>Thank you for committing to come to the school every week and help children to become confident and joyful readers!</p>
    </div>
    <h1 class="center cyan">What’s next?</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <ul class="mb-3">
        <li>Please complete our survey. Your feedback helps us to improve and continue programs which help children to read with confidence and joy.</li>
        <li>Volunteer in a School - choose a school from the list or recommend a school that needs and would welcome your support. </li>
        <li>Sign up for our post-training email tips and updates. We’ll never spam or share your information!</li>
        <li>Access Resources </li>
        <li><a href="certificate.php">View your Certificate of Completion</a></li>
    </ul>

    <div class="d-flex align-center justify-between">
        <a href="#" class="primary-btn" id="goBack">< Back</a>
        <a href="../volunteer" class="primary-btn">Back to volunteer home page</a>
        <a href="../../profile.php" class="primary-btn">Back to profile</a>
    </div>
    
</div>

<?php include('../../../includes/footer.php'); ?>