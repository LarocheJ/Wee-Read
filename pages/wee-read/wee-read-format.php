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

    if($row['wee_read_status'] == 1) {
        $wee_read_status = 2;
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
    <h1 class="cyan center"><em>wee read</em> Format</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="timeline mt-3">
        <p>Select books. Try to vary the type of book you read each time, so the children hear both fiction and non-fiction text. A list of recommended books to start with, as well as how to get books, is provided in Resources.</p>
        <p>Sit together and be sure that everyone can see the pictures and words in the book. Make sure everyone is comfortable. A list of ways to make dedicated reading spaces in homes is available in Resources.</p>
        <p>Do a book walk –  this will be explained in more detail on the next page of training.</p>
        <p>Read to children letting the words work their magic. Use lots of expression and enthusiasm! Pause every so often to pose a question that enhances their understanding, explain what a word means or draw out children&#39;s personal experiences that might connect to the book you are reading. Engaged, interactive reading is &ldquo;a merger of motivation and thoughtfulness&rdquo;.</p>
        <p>Take time after you finish reading to talk about the book. Look in their faces and listen closely to what children are sharing with you.</p>
        <p>Don&#39;t TEST children on their comprehension, just ask them to tell you about the book. Have a &lsquo;back and forth, give and take&rsquo; conversation and follow their lead.</p>
        <p>Try focusing on important concepts and words from the text. For example: The Little Engine That Could is a great book with big ideas about motivation and helping others. For example, &lsquo;rumbled&rsquo;, &lsquo;bellowed&rsquo;, and &lsquo;dingy&rsquo; are excellent rare words from the story that children may have never heard before.</p>
        <p>Choose an extra activity to do after reading. We have 8 suggested extra activities which will be described later.</p>
        <p>After reading aloud is a good time to keep talking together to focus on what&#39;s special about reading. Learn about their interests so you can request books from the school that will engage them even more!</p>
    </div>

    <p style="text-align:center;">TALK, TALK, TALK TOGETHER <span class="cyan">•</span> BEFORE READING <span class="cyan">•</span> DURING READING <span class="cyan">•</span> AFTER READING</p>

    <h1 class="cyan center mt-3">Selecting Books</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <video controls width="100%">
        <source src="<?php print $home ?>/videos/selecting_books.mp4" type="video/mp4" poster="<?php print $home ?>/images/video-posters/selecting_books.png">
    </video>
    <h1 class="cyan center mt-3">Keep in Mind</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <ul class="mb-3 center">
        <li>We want children to develop a positive relationship with books and reading.</li>
        <li>The more fun the you have reading, the more fun the child will have.</li>
        <li>Find ways to communicate your excitement and joy for reading.</li>
    </ul>
    <video controls width="100%" poster="<?php print $home ?>/images/video-posters/anytime_anywhere.png">
        <source src="<?php print $home ?>/videos/anytime_anywhere.mp4" type="video/mp4">
    </video>

    <div class="d-flex justify-between align-center mt-3 progression">
        <div>
            <a href="early-literacy.php" class="primary-btn float-left">< Back</a>
        </div>
        <div>
            <p class="bold cyan center large-body-txt mb-0"><?php print $row['wee_read_status']?> of 7</p>
            <p class="cyan center mt-0">modules completed</p>
        </div>
        <div>
            <a href="going-on-a-book-walk.php?module=3" class="primary-btn float-right">Save and Continue ></a>
        </div>
    </div> 

</div>

<?php include('../../includes/footer.php'); ?>