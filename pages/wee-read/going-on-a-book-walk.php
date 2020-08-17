<?php 

    require('../../includes/connection.php');
    require('../../includes/functions.php');
    checkIfLoggedIn();
    include('../../includes/head.php'); 

    $sql = "SELECT wee_read_status FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $row = mysqli_fetch_array($result);

    if($row['wee_read_status'] == 2) {
        $wee_read_status = 3;
        $sql = "UPDATE users SET wee_read_status=? WHERE email=?";
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
    <h1 class="cyan center">Going on a &ldquo;Book Walk&rdquo;</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="d-flex justify-between align-center">
        <div>
            <img class="rounded" src="<?php print $home ?>/images/stock/IMG_6871.jpg" alt="two children reading with an older man.">
        </div>
        <div class="ml-1">
            <p>A Book Walk should be no longer than a minute or two. Look at the cover together. Read the title aloud. Encourage children to predict what the book might be about. Predicting should not take too much time. Prediction is not the same thing as guessing. When you ask for a prediction you are teaching children to use their brains and think! Ask children to share what they might already know about the story/topic. Model by using language such as &ldquo;I wonder if this book is about boats, because I see a boat here.&rdquo;</p>
        </div>
    </div>
    <p class="my-3">Scan some of the pages of the book. Talk about the illustrations together. Don&#39;t read the words on the pages, just use the pictures inside to make further predictions. Think aloud together about what the pictures might be saying about the story or topic. Wonder together about the characters, the content and what is likely to happen. Try to get the children to do most of the talking.</p>

    <h1 class="cyan center mt-3">Talking About the Book</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <video controls width="100%" poster="<?php print $home ?>/images/video-posters/book_walk.png">
        <source src="<?php print $home ?>/videos/book_walk.mp4" type="video/mp4">
    </video>

    <div class="d-flex justify-between align-center mt-3 progression">
        <div>
            <a href="wee-read-format.php" class="primary-btn float-left">< Back</a>
        </div>
        <div>
            <p class="bold cyan center large-body-txt mb-0"><?php print $row['wee_read_status']?> of 7</p>
            <p class="cyan center mt-0">modules completed</p>
        </div>
        <div>
            <a href="when-reading.php?module=4" class="primary-btn float-right">Save and Continue ></a>
        </div>
    </div>   

</div>

<?php include('../../includes/footer.php'); ?>