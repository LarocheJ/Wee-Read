<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['full_name'];
        $email = $_POST['email'];
        if(isset($phone)) {
            $phone = $_POST['phone'];
        }
        $message = $_POST['message'];

        // $from = $email;
        $subject = 'New message from '.$name.' on weeread.ca';
        $body = "Name: $name.\n".
        "Email: $email.\n".
        "Phone: $phone.\n".
        "Message: $message.\n";

        $to = 'contact@weeread.ca';
        $headers = "From: $email \r\n";
        $headers .= "Reply-To: $email \r\n";

        if(mail($to, $subject, $body, $headers)){
            header('Location: contact.php?mail=success');
            $_SESSION['message'] = 'Success! We will get back to you as soon as possible!';
        } else {
            header('Location: contact.php?mail=error');
            $_SESSION['message'] = 'There was an error while processing your message. Please try again later.';
        } 
    }

    require('../includes/connection.php');
    include('../includes/head.php');
?>
<div class="contact-bg"></div>
<div class="contact-card cyan">
    <h1 class="medium-heading">Contact Us</h1>
    <p class="my-1">Please send us your contact information and a brief message with your question or comment and we will get back to you as soon as we are able. Thank you!</p>
    <form action="" method="post"> 
        <?php if(isset($_GET['mail'])) { 
            if($_GET['mail'] == 'error') { ?>
                <p class="error-msg"><?php print $_SESSION['message']; ?></p>
            <?php } else { ?>
                <p class="success-msg"><?php print $_SESSION['message']; ?></p>
            <?php } ?>
        <?php } ?>
        <input type="text" name="full_name" id="full_name" placeholder="FULL NAME" required>
        <input type="email" name="email" id="email" placeholder="EMAIL" required>
        <input type="tel" name="phone" id="phone" placeholder="PHONE NUMBER (optional)">
        <textarea name="message" id="message" cols="30" rows="5" placeholder="MESSAGE" required></textarea>
        <input class="primary-btn" type="submit" name="submit" value="Send">
    </form>
</div>


<?php include('../includes/footer.php'); ?>