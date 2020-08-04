<?php 
    require('../includes/connection.php');

    if(isset($_SESSION['email'])) {
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($connection);
        $user = mysqli_real_escape_string($connection, $_SESSION['email']);
    
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        $row = mysqli_fetch_array($result);

        header('Location: profile.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $full_name = mysqli_real_escape_string($connection, ucwords($_POST['full_name']));
        $email = mysqli_real_escape_string($connection, $_POST['email']);

        $_SESSION['form_full_name'] = $full_name;

        $sql = "SELECT email FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($connection);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: register.php?error=sql_error");
            $_SESSION['message'] = 'Sorry, there was an unexpected error. Please try again later.';
            exit();

        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);

            if($resultCheck > 0){
                header("Location: register.php?error=duplicate_email");
                $_SESSION['message'] = 'Sorry, this email address already exists.';
                exit();

            } else {
                $sql = "INSERT INTO users (full_name, email) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($connection);
            }

            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: register.php?error=sql_error");
                $_SESSION['message'] = 'Sorry, there was an unexpected error. Please try again later.';
                exit();

            } else {
                mysqli_stmt_bind_param($stmt, "ss", $full_name, $email);
                mysqli_stmt_execute($stmt);
                $_SESSION['name'] = $full_name;
                $_SESSION['email'] = $email; 

                unset($_SESSION['form_full_name']);
                unset($_SESSION['message']);

                if(isset($_GET['from-wee-read'])) {
                    header('Location: wee-read/welcome.php?registration=success');
                } elseif(isset($_GET['from-pee-wee-read'])) {
                    header('Location: pee-wee-read/welcome.php?registration=success');
                } else {
                    header('Location: profile.php?registration=success');
                }
                exit();
            }
        }
    }

    include('../includes/head.php');
?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="cyan center">Hello!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <p class="center">In order to start the wee read course, we need to know who you are so we can save your progress.</p>
    <form action="" method="post">
        <div class="input-field">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" value="<?php if(isset($_GET['error'])) { print $_SESSION['form_full_name']; } ?>" required>
        </div>
        <div class="input-field">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="<?php if(isset($_GET['error'])) {
                print 'error-border';
            }?>" required>
            <?php if(isset($_GET['error'])) { ?>
                <small class="error-msg-small">This email address is taken. Please enter a different one or log in below.</small>
            <?php }?>
        </div>
        <button type="submit" class="primary-btn">Sign Up</button>
        <small>Already have an account? <a href="<?php if(isset($_GET['from-wee-read'])) {
                print 'login.php?from-wee-read';
            } elseif(isset($_GET['from-pee-wee-read'])) {
                print 'login.php?from-pee-wee-read';
            } else { print 'login.php'; }?>"> Log In</a></small>
    </form>
</div>
<?php 
    include('../includes/footer.php'); 
?>