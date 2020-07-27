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

<div class="hero orange-bg mb-3">
    <div class="container">
        <h2 class="center white medium-heading">Welcome, <?php print $row['full_name']; ?>!</h2>
        <p class="white center large-body-txt mt-1">This is your dashboard, where you can check you progress and pick up where you left off!</p>
    </div>
</div>

<div class="container">

    <h2 class="cyan center mb-3 small-heading">Programs:</h2> 
    
    <div class="programs">
        <div class="card cyan">
            <h3 class="center">wee read</h3>
            <div class="circle border-cyan">
                <?php print $row['wee_read_status'] ?>
            </div>
            <p class="mb-0"><?php print $row['wee_read_status'] ?> of 7</p>
            <p>modules completed</p>
            <a href="<?php print $home ?>/pages/wee-read/<?php 
                if($row['wee_read_status'] == 0 ) {
                    print 'index.php';
                } elseif($row['wee_read_status'] == 1) {
                    print 'early-literacy.php';
                }  elseif($row['wee_read_status'] == 2) {
                    print 'wee-read-format.php';
                }  elseif($row['wee_read_status'] == 3) {
                    print 'going-on-a-book-walk.php';
                }  elseif($row['wee_read_status'] == 4) {
                    print 'when-reading.php';
                }  elseif($row['wee_read_status'] == 5) {
                    print 'after-reading.php';
                }  elseif($row['wee_read_status'] == 6) {
                    print 'tips-for-reading-aloud-to-children.php';
                }  elseif($row['wee_read_status'] == 7) {
                    print 'resources.php';
                }
            ?>
            " class="primary-btn"><?php if($row['wee_read_status'] == 7) { 
                print 'Go to resources >';
            } elseif ($row['wee_read_status'] == 0) {
                print 'Get Started >';
            } else {
                print 'Continue to next lesson >';
            } ?>
            </a>
            
        </div>
        <div class="card orange">
            <h3 class="center">pee wee read</h3>
            <div class="circle border-orange">
                <?php print $row['pee_wee_read_status'] ?>
            </div>
            <p class="mb-0"><?php print $row['pee_wee_read_status'] ?> of 10</p>
            <p>modules completed</p>
            <a href="<?php print $home ?>/pages/pee-wee-read/<?php 
                if($row['pee_wee_read_status'] == 0 ) {
                    print 'index.php';
                } elseif($row['pee_wee_read_status'] == 1) {
                    print 'why-pee-wee-read-is-important.php';
                }  elseif($row['pee_wee_read_status'] == 2) {
                    print 'did-you-know.php';
                }  elseif($row['pee_wee_read_status'] == 3) {
                    print 'early-literacy.php';
                }  elseif($row['pee_wee_read_status'] == 4) {
                    print 'note.php';
                }  elseif($row['pee_wee_read_status'] == 5) {
                    print 'whats-next.php';
                } elseif($row['pee_wee_read_status'] == 6) {
                    print 'read-sing-talk-play-love.php';
                }  elseif($row['pee_wee_read_status'] == 7) {
                    print 'how-pee-wee-read-works.php';
                }  elseif($row['pee_wee_read_status'] == 8) {
                    print 'key-points.php';
                }  elseif($row['pee_wee_read_status'] == 9) {
                    print 'technology-use.php';
                } elseif($row['pee_wee_read_status'] == 10) {
                    print 'congratulations.php';
                }
            ?>
            " class="primary-btn"><?php if($row['pee_wee_read_status'] == 10) { 
                print 'Go to resources >';
            } elseif ($row['pee_wee_read_status'] == 0) {
                print 'Get Started >';
            } else {
                print 'Continue to next lesson >';
            } ?>
            </a>
        </div>
    </div>

</div>

<?php 

    include('../includes/footer.php'); 

    } else {
        header('Location: ../index.php');
    }
?>