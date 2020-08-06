<?php 

    require('../../../includes/connection.php');
    require('../../../includes/functions.php');
    checkIfLoggedIn();
    include('../../../includes/head.php'); 

    $sql = "SELECT pee_wee_read_volunteer FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_array($result);

    if($row['pee_wee_read_volunteer'] == 'no') {
        $pee_wee_read_volunteer = 'yes';
        $sql = "UPDATE users SET pee_wee_read_volunteer=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $pee_wee_read_volunteer, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan">Welcome!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <p>Thank you for volunteering for this special opportunity to help young children become confident and joyful readers. We are grateful that you would choose to make this commitment which will have long lasting positive impacts.</p>
    <h2 class="cyan mt-3">You Will</h2>
    <ul class="mb-3">
        <li>Go to an Early Learning or Child Care Centre every week for eight weeks to read to children.</li>
        <li>Develop bonds with the children and make them feel special.</li>
        <li>Become an important part of their lives while you’re there.</li>
    </ul>

    <a href="#" class="primary-btn float-left" id="goBack">< Back</a>
    <a href="overview.php" class="primary-btn float-right">Continue ></a>
</div>

<?php include('../../../includes/footer.php'); ?>