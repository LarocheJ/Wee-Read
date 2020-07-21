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

    <h2 class="center">Welcome, <?php print $row['full_name']; ?> </h2>

</div>

<?php 

    include('../includes/footer.php'); 

    } else {
        header('Location: ../index.php');
    }
?>