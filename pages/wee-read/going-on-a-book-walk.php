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

    if($row['wee_read_status'] == 3) {
        $wee_read_status = 4;
        $sql = "UPDATE users SET wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="container">
    <h1 class="cyan center">Going on a "Book Walk"</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="d-flex justify-between align-top">
        <div>
            <img class="rounded" src="<?php print $home ?>/images/stock/2017-06-01-8.jpg" alt="2 young boys and a man sitting outside and reading">
        </div>
        <div>
            <p>A Book Walk should be no longer than a minute or two. Look at the cover together. Read the title aloud. Encourage children to predict what the book might be about. Predicting should not take too much time. Prediction is not the same thing as guessing. When you ask for a prediction you are teaching children to use their brains and think! Ask children to share what they might already know about the story/topic. Model! Use language such as "I wonder if this book is about boats, because I see a boat here."</p>
        </div>
    </div>
    <p>Scan some of the pages of the book. Talk about the illustrations together. Don’t read the words on the pages, just use the pictures inside to make further predictions. Think aloud together about what the pictures might be saying about the story or topic. Wonder together about the characters, the content and what is likely to happen. Try to get the children to do most of the talking.</p>

    <div class="d-flex align-center justify-between">
        <a href="wee-read-format.php" class="primary-btn float-left">< Back</a>
        <?php if($row['wee_read_status'] == 7){ ?>
            <a href="resources.php" class="primary-btn float-right">Resources</a>
        <?php } ?>
        <a href="when-reading.php" class="primary-btn float-right">Save and Continue ></a>
    </div>    

</div>

<?php include('../../includes/footer.php'); ?>