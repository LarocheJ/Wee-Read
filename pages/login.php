<?php 
    require('../includes/connection.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = mysqli_real_escape_string($connection, $_POST['email']);

        if(empty($email)) {
            header("Location: login.php?error=empty_email_field");
            $_SESSION['message'] = 'Please enter your email address.';
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE email=?";
            $stmt = mysqli_stmt_init($connection);

            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: login.php?error=sql_error");
                $_SESSION['message'] = 'Sorry, there was an unexpected error. Please try again later.';
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if($row = mysqli_fetch_assoc($result)){
                    if($email == $_POST['email']){ 
                        $_SESSION['email'] = $_POST['email'];
                        unset($_SESSION['message']);
                        
                        if(isset($_GET['from-wee-read'])) {
                            header('Location: wee-read/welcome.php?login=success');
                        } elseif(isset($_GET['from-pee-wee-read'])) {
                            header('Location: pee-wee-read/welcome.php?login=success');
                        } else {
                            header('Location: profile.php?login=success');
                        }

                        exit();
                    }
                } else {
                    header("Location: login.php?error=email_not_found");
                    $_SESSION['message'] = 'No accounts were found with this email.';
                    exit();
                }
            }
        }
    }

    include('../includes/head.php');
    
?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="cyan center">Log In</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <p class="center">Welcome back! Enter your email below to pick up where you left off.</p>

    <form action="" method="post">
        <?php if(isset($_GET['error'])) { 
            if($_GET['error'] == 'sql_error') {
        ?>
            <p class="error-msg"><?php print $_SESSION['message']; ?></p>
        <?php }} ?>
        <div class="input-field">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="<?php if(isset($_GET['error'])) {
                if(isset($_SESSION['message'])) {
                    print 'error-border';
                }
            }?>">
            <?php if(isset($_GET['error'])) { ?>
                <small class="error-msg-small"><?php if(isset($_SESSION['message'])) { print $_SESSION['message']; } ?></small>
            <?php }?>
        </div>
        <button type="submit" class="primary-btn">Log In</button>
        <small>Don't have an account? <a href="register.php">Sign up here</a></small>
    </form>
</div>
<?php 

    include('../includes/footer.php'); 
    
?>