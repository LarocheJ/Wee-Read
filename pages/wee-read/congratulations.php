<?php 
    include('../../includes/head.php');

    $sql = "SELECT wee_read_status FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $row = mysqli_fetch_array($result);

    if($row['wee_read_status'] == 7) {
        $wee_read_status = 8;
        $sql = "UPDATE users SET wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }
?>

<div class="container">
    <h1 class="cyan center large-heading mt-3">Congratulations!</h1>
    <div class="center mt-3">
        <p>Please complete our survey. Your feedback helps us to improve and continue programs which help children to read with confidence and joy.</p>

        <p><a href="volunteer">Train to volunteer in a school near you.</a></p>

        <p>Sign up for our post-training email tips and updates. We’ll never spam or share your information!</p>

        <p>Access Resources</p>

        <p>Print your Certificate of Completion </p>
    </div>
    <a href="#" class="primary-btn float-left" id="goBack">< Back</a>
    <a href="../profile.php" class="primary-btn float-right" id="goBack">Back to profile</a>
</div>