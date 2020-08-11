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

    if($row['wee_read_status'] == 3) {
        $wee_read_status = 4;
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
    <h1 class="cyan center">When Reading</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="d-flex justify-between align-top">
        <div>
            <p>Read in a lively, engaging way, using voices, gestures, and expressions!</p>
            <p>Don’t interrupt the reading too often when reading fiction or the flow of the story can be lost. Pausing to look at the pictures/charts/maps in non-fiction books helps children recognize these special features.</p>
            <p>Take time to explain important words.</p>
            <p>Get children interested in print by tracking (sometimes running your finger under the words as you are reading the text) or pointing to special letters or words on a page.</p>
        </div>
        <div>
            <img class="rounded cropped" src="<?php print $home ?>/images/stock/ReadTogether-03-0413.jpg" alt="Man excitedly reading to two children.">
        </div>
    </div>
    <p>When you read a rhyming story, especially one they have heard before, stop and let them fill in the final rhyming word that ends a line. Encourage them to chime in! Poems and nursery rhymes are great for this, too. Rhymes help children feel successful in predicting what work comes next. It’s also an easy way for them to joke with you; being playful with language is an important part of learning how it works.</p>
    <p>Remember to promote learning without taking away from the children’s enjoyment of the book and your time together.</p>
    <blockquote>“When adults read to children, they are also passing torches—literacy torches—from one generation to the next.” <span>- Jim Trelease</span></blockquote>
    <video controls width="100%" poster="../../images/video-posters/enthusiasm.png">
        <source src="../../videos/enthusiasm.mp4" type="video/mp4">
    </video>

    <div class="d-flex justify-between align-center mt-3 progression">
        <div>
            <a href="going-on-a-book-walk.php" class="primary-btn float-left">< Back</a>
        </div>
        <div>
            <p class="bold cyan center large-body-txt mb-0"><?php print $row['wee_read_status']?> of 7</p>
            <p class="cyan center mt-0">modules completed</p>
        </div>
        <div>
            <a href="after-reading.php?module=5" class="primary-btn float-right">Save and Continue ></a>
        </div>
    </div> 
</div>

<?php include('../../includes/footer.php'); ?>