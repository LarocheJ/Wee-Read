<?php 

    include('../../includes/head.php'); 

    $sql = "SELECT pee_wee_read_status FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $row = mysqli_fetch_array($result);

    if($row['pee_wee_read_status'] == 2) {
        $wee_read_status = 3;
        $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="container">
    <h1 class="cyan center">Did you know? 90% of our brains develop before the age of five!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <img class="d-block margin-auto img-small" src="<?php print $home ?>/images/tukay/kyle_tukay_language_final.png" alt="">
    
    <p>Scientists are discovering more about our brains every day. Building a brain is like building a house. Before you can have rooms and fill them, or have a mind and fill it with knowledge, you have to lay a solid foundation and make a strong frame. The same thing happens in our brains! The first five years of our lives are spent “learning how to learn” and building foundations and connections for later learning. One of the most important ways to build that foundation is to create a love of reading by connecting reading with feelings of happiness. <strong>It is never too early and it is never too late to start reading to a child!</strong></p>
    <p>Some people start reading to their babies before they’re even born. Sometimes, it takes a while for a child to have someone who cares about reading in their life. The children in your life are ready when you are!</p>

    <a href="#" class="primary-btn float-left" id="goBack">< Back</a>
    <a href="early-literacy.php" class="primary-btn float-right">Save and Continue ></a>
</div>

<?php include('../../includes/footer.php'); ?>