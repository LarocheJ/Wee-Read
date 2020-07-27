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

    if($row['pee_wee_read_status'] == 1) {
        $wee_read_status = 2;
        $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="container">
    <h1 class="cyan center">Why pee wee read is important</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    
    <p>Do you remember learning to read? Most grown-ups can’t, and that’s okay! What probably happened is that an important adult in your life shared books and stories with you, and this sparked a fire that made you want to learn more!</p>
    <p>Every child deserves to feel that spark, so here are a few things to remember:</p>
    <ul>
        <li><strong>Be Playful!</strong> The more fun you have, the more fun the children will have.</li>
        <li><strong>Show the Love!</strong> Communicate your excitement and joy for reading. It’s contagious, and we want to catch it.</li>
        <li><strong>Don’t force it!</strong> Children need to develop a positive relationship with books and reading, so we don’t want feel forced to read.</li>
    </ul>

    <div class="d-flex align-center justify-between">
        <a href="index.php" class="primary-btn float-left">< Back</a>
        <?php if($row['pee_wee_read_status'] == 10){ ?>
            <a href="resources.php" class="primary-btn float-right">Resources</a>
        <?php } ?>
        <a href="did-you-know.php" class="primary-btn float-right">Save and Continue ></a>
    </div>
</div>

<?php include('../../includes/footer.php'); ?>