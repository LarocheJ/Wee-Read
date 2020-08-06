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

    if($row['wee_read_status'] == 4) {
        $wee_read_status = 5;
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
    <h1 class="cyan center">After Reading</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <img class="rounded mb-3" src="<?php print $home ?>/images/stock/IMG_7107.jpg" alt="Woman reading to a baby">
    <p>Try using one or two of these extra activity ideas each time, for no longer than 10 minutes:</p>
    <ol>
        <li>Have an informal conversation about the book. Listen intently to the children’s ideas. Example prompts:</li>
        <ul>
            <li>Was there anything you liked about this book?</li>
            <li>Was there anything that was confusing? Surprising?</li>
            <li>Have you read other books like it? How is this the same? Different?</li>
            <li>Has anything that happened in this book ever happened to you?</li>
            <li>When you were reading, could you “see” the story happening in your imagination?</li>
        </ul>
        <p><em>* Remember to wait after asking a question or making a comment. Count inside your head for 5-10 seconds. This quiet space helps children feel invited to respond and gives them time to think.</em></p>
        <li>Work on sequencing and retelling the story.</li>
        <ul>
            <li>Ask “What happened first? Next? Then what happened?”</li>
            <li>Help the child make connections between the read-aloud and their own life. </li>
            <li>Ask open-ended questions -- ones that require a child to form an answer -- more than closed-ended questions -- those that require only a yes or no answer.</li>
            <li>Ask the child what the first letters of their names are. Turn to a page in the book and have them look for that letter. See how many they can find.</li>
        </ul>
        <li>Use open-ended rather than closed-ended questions.</li>
        <p class=bold>Close-ended question example:</p>
        <p>Q. Do you like going to the park?</p>
        <p>A. Yes.</p>
        <p>Q. Do you wish you had a pet?</p>
        <p>A. Yes.</p>
        <p class=bold>Open-ended question example:</p>
        <p>Q. What is your favourite thing about going to the park?</p>
        <p>A. I love the slide.</p>
        <p>Q. Why do you like the slide?</p>
        <p>A. It’s so fast!</p>
        <p>Q. If you could have any kind of animal as a pet, what would it be?</p>
        <p>A. A lion.</p>
        <p>Q. A lion! Wow! How come?</p>
        <p>A. I like them and they roar.</p>
        <li>Use the 12 high frequency word cards. The words to focus on are:  the, and, go, in, at, to, you, is, me, look, can, like. Give children a card after reading the book and ask them to find the word on some of the pages. Be sure the words are in the book!</li>
        <li>Develop vocabulary. Talk about new, big, cool words by using child-friendly definitions and explain the main meaning of the new word by using words children are likely to know already. Invite them to say the new word out loud several times. Use multiple words which mean the same thing, which helps to  increase the child’s vocabulary.</li>
        <li>Have fun playing with rhyme. Try choosing a word from the book: What might rhyme with ‘pool’? School, stool, drool, cool, fool. Then make a silly sentence with the rhyming words. “The cool fool stood on a stool at school and fell into the pool.”</li>
        <li>Use the cards to play The Name Game. Children love this game and it helps builds oral language.</li>
        <li>Teach them a Tongue Twister. See if they can say it quickly. Slow it down and ask them to listen for the sound they hear most often in the words. Substitute their names into the tongue twister that begins with the same letter of their name.</li>
    </ol>

    <blockquote>“The eventual strength of our vocabulary is determined not by the ten thousand common words but by how many rare words we understand… Whereas an adult uses only nine rare words per thousand when talking with a three- year-old, there are three times as many in a children’s book and more than seven times as many in a newspaper.” <span>– Jim Trelease</span></blockquote>

    <div class="d-flex justify-between align-center mt-3 progression">
        <div>
            <a href="when-reading.php" class="primary-btn float-left">< Back</a>
        </div>
        <div>
            <p class="bold cyan center large-body-txt mb-0"><?php print $row['wee_read_status']?> of 7</p>
            <p class="cyan center mt-0">modules completed</p>
        </div>
        <div>
            <a href="tips-for-reading-aloud-to-children.php?module=6" class="primary-btn float-right">Save and Continue ></a>
        </div>
    </div> 

    
</div>

<?php include('../../includes/footer.php'); ?>