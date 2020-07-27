<?php 

    include('../../includes/head.php'); 

    $sql = "SELECT wee_read_status FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $row = mysqli_fetch_array($result);

    if($row['wee_read_status'] == 0) {
        $wee_read_status = 1;
        $sql = "UPDATE users SET wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }
    
?> 


<div class="container">
    <h1 class="cyan center">Welcome!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="d-flex justify-between align-top">
        <div>
            <img class="rounded cropped" src="<?php print $home ?>/images/stock/reading-place.jpg" alt="Woman reading a book to a young girl">
        </div>
        <div>
            <p>Thank you for making the choice to learn more about helping a child to become a confident and joyful reader. Your commitment to this will have long-lasting, positive impacts.</p>
            <p>As a child is learning to read, they need to fall in love with the idea of reading. They have to think that books and stories and pictures are magical, and they have to feel the joy of someone reading aloud to them.</p>
            <p>This is what you’ll learn more about, and exactly how to make it happen. </p>
        </div>
    </div>
    <div>
        <h1 class="cyan center mt-5">Why wee read is important</h1>
        <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
        <p>Do you remember learning to read? Most of us cannot really recall this process. Reading a complex activity. Perhaps, without you even knowing, two of the most important things that helped you to become a reader were: </p>
        <ul>
            <li>having joyful experiences with books, and,</li>
            <li>building your confidence in your identity as a reader</li>
        </ul>
        <p>We want all children to be able to read with confidence and joy and you are helping to make that happen! You will help them to build their self-confidence, understand how magical and enjoyable books can be, and learn more about why it is fun and important to read.</p>
        <p>We want all children to be able to read with confidence and joy and you are helping to make that happen! You will help them to build their self-confidence, understand how magical and enjoyable books can be, and learn more about why it is fun and important to read.</p>
        <p>Remember, during these read aloud times, you are not teaching the child how to read. You are showing the child what there is to love about reading.</p>
        <p>You will be creating a warm and inviting environment by reading aloud, making conversation, playing games, having fun, and sharing your own love of reading. Children need to be exposed to verbal and written language through reading, talking, singing, rhyming, and playing every day. Adding a warm relationship to these activities makes learning more accessible and effective.</p>

    </div>
    <h1 class="cyan center mt-5">You will:</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="d-flex justify-between align-top">
        <div>
            <ul>
                <li>Learn strategies for making reading really fun</li>
                <li>Learn more about the importance of “serve & return” conversational relationships</li>
                <li>Feel confident and joyful in your own ability to effectively read aloud to a child</li>
            </ul>
        </div>
        <div>
            <img class="rounded cropped" src="<?php print $home ?>/images/stock/2017-06-09-Calgary-Reads-Inglewood-Book-House-2-12.jpg" alt="Woman reading a book to young children">
        </div>
    </div>
    <?php if($row['wee_read_status'] == 7){ ?>
        <a href="resources.php" class="primary-btn float-left">Resources</a>
    <?php } ?>
    <a href="../register.php" class="primary-btn float-right">Save and Continue ></a>
</div>

<?php include('../../includes/footer.php'); ?>