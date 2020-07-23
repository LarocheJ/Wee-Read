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

    if($row['pee_wee_read_status'] == 3) {
        $wee_read_status = 4;
        $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="container">
    <h1 class="cyan center">Early Literacy</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <p>The important adults in young children’s lives are our first and best teachers. “Early literacy” is everything we need to know about reading and writing to help us be ready to actually read and write. Early literacy skills begin to develop right from birth. Our positive early experiences with books and language create the foundation for our success in learning to read.</p>
    <p>This means building our Vocabulary, Print Awareness, Print Motivation, Narrative Skills, Letter Knowledge, and <strong>Phonological Awareness</strong>. I’ll tell you more about each of these skills, and then we’ll move on to what you can do to help kids like me develop them!</p>
    <p>My <strong>Vocabulary</strong> is how many words I know. At first, this is mostly the names of things. I should know thousands of words by the time I reach kindergarten, which means, I need to have heard millions of words before then!</p>
    <p><strong>Print Awareness</strong> is knowing that the world is full of symbols and letters, and that they have meaning. I should know the concept of a word and I should be starting to learn how words work. In English, that means starting at the top of the page and then moving to the bottom and “reading” words from left to right.</p>
    <p><strong>Letter Knowledge</strong> is the ability to recognize letters. By the time I get to kindergarten I should know a few meaningful letters, like the ones in my name and maybe a few common words like the word STOP on a stop sign.</p>
    <p><strong>Phonological Awareness</strong> is understanding that words are made up of sounds and that those sounds have symbols that represent them. I should be able to make lots of sounds, like when I talk and sing, and play with those sounds, like we do in rhymes and jokes.</p>
    <p><strong>Print Motivation</strong> is that spark we were talking about. I have to love reading so much that by the time I get to kindergarten I can’t wait to learn what all those letters and words are and how to read them!</p>
    <p><strong>Narrative Skills</strong> are storytelling skills. Knowing that stories have beginnings, middles, and ends, and are full of characters and information. This is true of stories that we find in books and the ones that I tell in real life. Like when I talk about that time I went to the grocery store and I dropped my ice cream and I cried a little and then I felt better!</p>

    <a href="#" class="primary-btn float-left" id="goBack">< Back</a>
    <a href="note.php" class="primary-btn float-right">Save and Continue ></a>
</div>

<?php include('../../includes/footer.php'); ?>