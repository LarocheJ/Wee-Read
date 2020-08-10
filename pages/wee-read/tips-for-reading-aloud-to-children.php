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

    if($row['wee_read_status'] == 5) {
        $wee_read_status = 6;
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
    <h1 class="cyan center">Tips for reading aloud to children</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="d-flex justify-between align-middle my-3">
        <div>
            <p class="bold">Before reading:</p>
            <ul>
                <li>Sit close together so you can all see the pictures in the book</li>
                <li>Read the title and the author</li>
                <li>Wonder together and predict what the book will be about</li>
            </ul>
        </div>
        <div>
            <img class="rounded cropped" src="<?php print $home ?>/images/stock/CMReadingRally-16-1013.jpg" alt="Woman reading a Dr. Seuss book to a child.">
        </div>
    </div>
    
    <div class="d-flex justify-between align-middle my-3">
        <div>
            <img class="rounded cropped" src="<?php print $home ?>/images/stock/calgary_reads (11 of 30).jpg" alt="Man reading to smiling child">
        </div>
        <div>
        <p class="bold">During reading:</p>
            <ul>
                <li>Read the story joyfully and with expression</li>
                <li>Point out awesome words and amazing pictures</li>
                <li>Explain the meaning of important words</li>
                <li>Cross over into the world of story... mingle and breathe the same air as the characters</li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-between align-center my-3">
        <div>
            <p class="bold">After reading:</p>
            <ul>
                <li>Take time to talk about the book</li>
                <li>Read the book again sometime</li>
                <li>Remember to READ EVERY DAY THAT YOU EAT!</li>
            </ul>
        </div>
        <div>
            <img class="rounded cropped" src="<?php print $home ?>/images/stock/wrodjar.jpg" alt="Smiling woman doing activity with child.">
        </div>
    </div>

    <div class="d-flex justify-between align-center mt-3 progression">
        <div>
            <a href="after-reading.php" class="primary-btn float-left">< Back</a>
        </div>
        <div>
            <p class="bold cyan center large-body-txt mb-0"><?php print $row['wee_read_status']?> of 7</p>
            <p class="cyan center mt-0">modules completed</p>
        </div>
        <div>
            <a href="complete.php" class="primary-btn float-right">Save and Continue ></a>
        </div>
    </div> 
    
</div>

<?php include('../../includes/footer.php'); ?>