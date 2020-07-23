<?php 
    require('../includes/connection.php');

    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    include('../includes/head.php'); 

    if(isset($_SESSION['email'])) {
    
?> 

<div class="container">
    <h1 class="cyan center">Profile</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">

    <h2 class="center mb-3">Welcome, <?php print $row['full_name']; ?> </h2>
    
    <!-- Wee read modules -->
    <h2 class="center">Wee read</h2>
    <h3 class="center mb-3">You have completed <?php print $row['wee_read_status'] ?>/8 modules</h3>

    <div class="d-grid col-4 modules">
        <a href="wee-read"><div class="<?php if($row['wee_read_status'] > 0) { print 'enabled'; } ?>">Getting Started</div></a>

        <a <?php if($row['wee_read_status'] >= 1 ) { print 'href="wee-read/early-literacy.php"'; } ?>><div class="<?php if($row['wee_read_status'] > 1) { print 'enabled'; } ?>">Early Literacy</div></a>

        <a <?php if($row['wee_read_status'] >= 2 ) { print 'href="wee-read/wee-read-format.php"'; } ?>><div class="<?php if($row['wee_read_status'] > 2) { print 'enabled'; } ?>">Wee read format</div></a>

        <a <?php if($row['wee_read_status'] >= 3 ) { print 'href="wee-read/going-on-a-book-walk.php"'; } ?>><div class="<?php if($row['wee_read_status'] > 3) { print 'enabled'; } ?>">Going on a book walk</div></a>

        <a <?php if($row['wee_read_status'] >= 4 ) { print 'href="wee-read/when-reading.php"'; } ?>><div class="<?php if($row['wee_read_status'] > 4) { print 'enabled'; } ?>">When reading</div></a>

        <a <?php if($row['wee_read_status'] >= 5 ) { print 'href="wee-read/after-reading.php"'; } ?>><div class="<?php if($row['wee_read_status'] > 5) { print 'enabled'; }?>">After reading</div></a>

        <a <?php if($row['wee_read_status'] >=6 ) { print 'href="wee-read/tips-for-reading-aloud-to-children.php"'; } ?>><div class="<?php if($row['wee_read_status'] > 6) { print 'enabled'; } ?>">Tips for reading aloud to children</div></a>

        <a <?php if($row['wee_read_status'] >=7 ) { print 'href="wee-read/congratulations.php"'; } ?>><div class="<?php if($row['wee_read_status'] > 7) { print 'enabled'; } ?>">Congratulations</div></a>
    </div>

    <!-- Pee wee read modules -->
    <h2 class="center mt-3">Pee wee read</h2>
    <h3 class="center mb-3">You have completed <?php print $row['pee_wee_read_status'] ?>/11 modules</h3>

    <div class="d-grid col-4 modules">
        <a href="pee-wee-read"><div class="<?php if($row['pee_wee_read_status'] > 0) { print 'enabled'; } ?>">Getting Started</div></a>

        <a <?php if($row['pee_wee_read_status'] >= 1 ) { print 'href="pee-wee-read/why-pee-wee-read-is-important.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 1) { print 'enabled'; } ?>">Why pee wee read is important</div></a>

        <a <?php if($row['pee_wee_read_status'] >= 2 ) { print 'href="pee-wee-read/did-you-know.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 2) { print 'enabled'; } ?>">Did you know</div></a>

        <a <?php if($row['pee_wee_read_status'] >= 3 ) { print 'href="pee-wee-read/early-literacy.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 3) { print 'enabled'; } ?>">Early Literacy</div></a>

        <a <?php if($row['pee_wee_read_status'] >= 4 ) { print 'href="pee-wee-read/note.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 4) { print 'enabled'; } ?>">A note</div></a>

        <a <?php if($row['pee_wee_read_status'] >= 5 ) { print 'href="pee-wee-read/whats-next.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 5) { print 'enabled'; }?>">What’s Next</div></a>

        <a <?php if($row['pee_wee_read_status'] >=6 ) { print 'href="pee-wee-read/read-sing-talk-play-love.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 6) { print 'enabled'; } ?>">Read, Sing, Talk, Play and Love</div></a>

        <a <?php if($row['pee_wee_read_status'] >=7 ) { print 'href="pee-wee-read/how-pee-wee-read-works.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 7) { print 'enabled'; } ?>">How pee wee read Works</div></a>

        <a <?php if($row['pee_wee_read_status'] >=8 ) { print 'href="pee-wee-read/key-points.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 8) { print 'enabled'; } ?>">Key Points</div></a>

        <a <?php if($row['pee_wee_read_status'] >=9 ) { print 'href="pee-wee-read/technology-use.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 9) { print 'enabled'; } ?>">Technology Use</div></a>

        <a <?php if($row['pee_wee_read_status'] >=10 ) { print 'href="pee-wee-read/congratulations.php"'; } ?>><div class="<?php if($row['pee_wee_read_status'] > 10) { print 'enabled'; } ?>">Congratulations</div></a>
    </div>

</div>

<?php 

    include('../includes/footer.php'); 

    } else {
        header('Location: ../index.php');
    }
?>