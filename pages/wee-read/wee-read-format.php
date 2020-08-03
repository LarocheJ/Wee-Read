<?php 

    require('../../includes/connection.php');
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
    <h1 class="cyan center">Wee Read Format</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <!-- <ol>
        <li>Select books. Try to vary the type of book you read each time, so the children hear both fiction and non-fiction text. A list of recommended books to start with, as well as how to get books, is provided in Resources.</li>
        <li>Sit together and be sure that everyone can see the pictures and words in the book. Make sure everyone is comfortable. A list of ways to make dedicated reading spaces in homes is available in Resources.</li>
        <li>Do a "Book Walk" before starting to read.</li>
        <li>Read to children letting the words work their magic. Use lots of expression and enthusiasm! Pause every so often to pose a question that enhances their understanding, explain what a word means or draw out children’s personal experiences that might connect to the book you are reading. Engaged, interactive reading is “a merger of motivation and thoughtfulness”.</li>
        <li>Take time after you finish reading to talk about the book. Look in their faces and listen closely to what children are sharing with you.</li>
        <li>Don’t TEST children on their comprehension, just ask them to tell you about the book. Have a ‘back and forth, give and take’ conversation and follow their lead.</li>
        <li>Try focusing on important concepts and words from the text. For example: The Little Engine That Could is a great book with big ideas about motivation and helping others. For example, 'rumbled', 'bellowed', and 'dingy' are excellent rare words from the story that children may have never heard before.</li>
        <li>Choose an extra activity to do after reading. We have 8 suggested extra activities which will be described later.</li>
        <li>After reading aloud is a good time to keep talking together to focus on what’s special about reading. Learn about their interests so you can request books from the school that will engage them even more!</li>
    </ol> -->

    <div class="timeline">
        <p>Select books. Try to vary the type of book you read each time, so the children hear both fiction and non-fiction text. A list of recommended books to start with, as well as how to get books, is provided in Resources</p>
        <p>Sit together and be sure that everyone can see the pictures and words in the book. Make sure everyone is comfortable. A list of ways to make dedicated reading spaces in homes is available in Resources.</p>
        <p>Do a "Book Walk" before starting to read.</p>
        <p>Read to children letting the words work their magic. Use lots of expression and enthusiasm! Pause every so often to pose a question that enhances their understanding, explain what a word means or draw out children’s personal experiences that might connect to the book you are reading. Engaged, interactive reading is “a merger of motivation and thoughtfulness”.</p>
        <p>Take time after you finish reading to talk about the book. Look in their faces and listen closely to what children are sharing with you.</p>
        <p>Don’t TEST children on their comprehension, just ask them to tell you about the book. Have a ‘back and forth, give and take’ conversation and follow their lead.</p>
        <p>Try focusing on important concepts and words from the text. For example: The Little Engine That Could is a great book with big ideas about motivation and helping others. For example, 'rumbled', 'bellowed', and 'dingy' are excellent rare words from the story that children may have never heard before.</p>
        <p>Choose an extra activity to do after reading. We have 8 suggested extra activities which will be described later.</p>
        <p>After reading aloud is a good time to keep talking together to focus on what’s special about reading. Learn about their interests so you can request books from the school that will engage them even more!</p>
    </div>

        <ul class="d-flex justify-center my-5">
            <li>TALK, TALK, TALK TOGETHER </li>
            <li>BEFORE READING</li>
            <li>DURING READING</li>
            <li>AFTER READING</li>
        </ul>

    <h1 class="cyan center">Keep in Mind</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <ul class="mb-3 center">
        <li>We want children to develop a positive relationship with books and reading.</li>
        <li>The more fun the you have reading, the more fun the child will have.</li>
        <li>Find ways to communicate your excitement and joy for reading.</li>
    </ul>    

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