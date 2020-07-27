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

    if($row['pee_wee_read_status'] == 0) {
        $wee_read_status = 1;
        $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="container">
    <h1 class="cyan center">Pee Wee Read</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="d-flex justify-between align-center">
        <div>
            <img class="" src="<?php print $home ?>/images/tukay/kyle_tukay_physical_final.png" alt="Tukay">
        </div>
        <div>
            <p class="bubble bubble-arrow">Hi! My name is Tukay, and together we’re going to learn what you need to know to help a child in your life become a joyful reader! Don’t worry, it won’t be hard at all. </p>
        </div>
    </div>
    <p>You won’t be teaching a child <strong><em>HOW</em></strong> to read. Your job is to help us <strong><em>love books</em></strong> and make us <strong><em>want</em></strong> to learn to read, so that when we do get to school, we are ready! Before we learn how to read, we fall in love with the idea of reading; with books, stories, and most importantly, the people who share them with us!</p>
    <p>So that’s what you’re going to learn how to do. There are some simple things you can do with children EVERY DAY to help us <strong>fall in love with reading!</strong></p>

    <?php if($row['pee_wee_read_status'] == 10){ ?>
        <a href="resources.php" class="primary-btn float-left">Resources</a>
    <?php } ?>
    <a href="../register.php" class="primary-btn float-right">Save and Continue ></a>
</div>

<?php include('../../includes/footer.php'); ?>