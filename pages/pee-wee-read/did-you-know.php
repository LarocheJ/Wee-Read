<?php 
    require('../../includes/connection.php');
    include('../../includes/head.php'); 

    $sql = "SELECT pee_wee_read_status FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $row = mysqli_fetch_array($result);

    if($row['pee_wee_read_status'] == 1) {
        $wee_read_status = 2;
        $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<script>
    window.onload = function() {
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="cyan center">Did you know? 90% of our brains develop before the age of five!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <img class="d-block margin-auto img-small" src="<?php print $home ?>/images/tukay/kyle_tukay_language_final.png" alt="">
    
    <p>Scientists are discovering more about our brains every day. Building a brain is like building a house. Before you can have rooms and fill them, or have a mind and fill it with knowledge, you have to lay a solid foundation and make a strong frame. The same thing happens in our brains! The first five years of our lives are spent “learning how to learn” and building foundations and connections for later learning. One of the most important ways to build that foundation is to create a love of reading by connecting reading with feelings of happiness. <strong>It is never too early and it is never too late to start reading to a child!</strong></p>
    <p>Some people start reading to their babies before they’re even born. Sometimes, it takes a while for a child to have someone who cares about reading in their life. The children in your life are ready when you are!</p>

    <div class="d-flex justify-between align-center mb-3 progression">
        <div>
            <a href="why-pee-wee-read-is-important.php" class="primary-btn float-left">< Back</a>
        </div>
        <div>
            <p class="bold cyan center large-body-txt mb-0"><?php print $row['pee_wee_read_status']?> of 10</p>
            <p class="cyan center mt-0">modules completed</p>
        </div>
        <div>
            <a href="early-literacy.php?module=3" class="primary-btn float-right">Save and Continue ></a>
        </div>
    </div>

</div>

<?php include('../../includes/footer.php'); ?>