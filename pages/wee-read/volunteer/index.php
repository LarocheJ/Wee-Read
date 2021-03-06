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

    if($row['wee_read_volunteer'] == 'no') {
        $wee_read_volunteer = 'yes';
        $sql = "UPDATE users SET wee_read_volunteer=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $wee_read_volunteer, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan">Welcome, <?php print $row['full_name'] ?>!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <video class="mb-1" controls width="100%" poster="<?php print $home ?>/images/video-posters/wee_read_training_poster.jpg">
        <source src="<?php print $home ?>/videos/volunteer_training.mp4" type="video/mp4">
    </video>
    <p>Thank you for volunteering for this special opportunity to help a child to become a confident and joyful reader. We are grateful that you have chosen to make this commitment, which will have long lasting and positive impacts.</p>
    <h2 class="cyan mt-3">You Will</h2>
    <ul class="mb-3">
        <li>Meet with the same 2 kindergarten or grade one children every week, for 8 weeks</li>
        <li>Develop bonds with the children and make them feel special</li>
        <li>Become an important part of their school lives</li>
    </ul>

    <div class="d-flex justify-between align-middle volunteer-progression">
        <a href="<?php print $home ?>/pages/profile.php" class="primary-btn mt-1">< Profile</a>
        <a href="overview.php" class="primary-btn mt-1">Continue ></a>
    </div>
    
</div>

<?php include('../../../includes/footer.php'); ?>