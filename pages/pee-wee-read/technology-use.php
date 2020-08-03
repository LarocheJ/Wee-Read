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

    if($row['pee_wee_read_status'] == 8) {
        $wee_read_status = 9;
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
    <h1 class="cyan center">Technology Use</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">

    <div class="d-flex align-center">
        <div>
            <img class="img-medium" src="<?php print $home?>/images/tukay/tukay_world_final_nosky.png" alt="">
        </div>
        <div>
            <p>Families know: “There is no App to replace your lap!”  Now that you’ve learned what you need to know about reading to me to help me build my brain, there’s just one more thing for me to share. It is important to remember that while books and screens might be full of information, a screen doesn’t mean much to me without having you there to explain it. The world is full of tricky locks that I might lose interest in without you. You are the key that helps me unlock the world around me!</p>
        </div>
    </div>

    <div class="d-flex justify-between align-center mb-3 progression">
        <div>
            <a href="key-points.php" class="primary-btn float-left">< Back</a>
        </div>
        <div>
            <p class="bold cyan center large-body-txt mb-0"><?php print $row['pee_wee_read_status']?> of 10</p>
            <p class="cyan center mt-0">modules completed</p>
        </div>
        <div>
            <a href="resources.php" class="primary-btn float-right">Save and Continue ></a>
        </div>
    </div>

</div>

<?php include('../../includes/footer.php'); ?>