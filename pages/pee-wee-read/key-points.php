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

    if($row['pee_wee_read_status'] == 8) {
        $wee_read_status = 9;
        $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="container">
    <h1 class="cyan center">Key Points</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <img class="d-block margin-auto img-medium" src="<?php print $home ?>/images/tukay/Tukay_Spot_Finals3.png" alt="">
    
    <div class="center">
        <h2 class="uppercase cyan">Before reading</h2>
        <ul>
            <li>Sit close together so everyone can all see the pictures in the book</li>
            <li>Wonder together and predict what the book will be about</li>
        </ul>
        <h2 class="uppercase cyan">During reading</h2>
        <ul>
            <li>Read the story joyfully and with expression</li>
            <li>Point out awesome words and amazing pictures</li>
            <li>Live in the world of story; breathe the same air as the characters</li>
        </ul>
        <h2 class="uppercase cyan">After reading</h2>
        <ul>
            <li>Take time to talk about the book</li>
            <li>Read the book again sometime</li>
            <li>Try an early literacy activity</li>
            <li>Remember to READ, SING, TALK, PLAY, and LOVE EVERY DAY!</li>
        </ul>
    </div>

    <a href="#" class="primary-btn float-left" id="goBack">< Back</a>
    <a href="technology-use.php" class="primary-btn float-right">Save and Continue ></a>
</div>

<?php include('../../includes/footer.php'); ?>