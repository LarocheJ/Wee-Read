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

    if($row['pee_wee_read_status'] == 5) {
        $wee_read_status = 6;
        $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="container">
    <h1 class="cyan center">What’s Next?</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    
    <div class="d-flex align-center">
        <div>
            <img src="<?php print $home ?>/images/tukay/Tukay_Spot_Finals2.png" alt="">
        </div>
        <div>
            <p>Okay! You know a little about early literacy, and why it’s important. The work of brain-building and early literacy might seem complicated, but there are only FIVE things you need to do every day to make sure it happens! All you have to do is <span class="bold uppercase cyan">read</span>, <span class="bold uppercase cyan">sing</span>, <span class="bold uppercase cyan">talk</span>, <span class="bold uppercase cyan">play</span> and <span class="bold uppercase cyan">love</span> EVERY day.</p>
        </div>
    </div>

    <a href="#" class="primary-btn float-left" id="goBack">< Back</a>
    <a href="read-sing-talk-play-love.php" class="primary-btn float-right">Save and Continue ></a>
</div>

<?php include('../../includes/footer.php'); ?>