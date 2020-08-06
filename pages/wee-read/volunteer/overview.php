<?php

    require('../../../includes/connection.php');
    require('../../../includes/functions.php');
    checkIfLoggedIn();
    include('../../../includes/head.php'); 

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan">Overview of School Sessions</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <ul>
        <li>When you enter the school, you'll sign in at the office</li>
        <li>Then you'll go and choose a couple of books from the book bin to read</li>
        <li>Scan the books in preparation for reading them</li>
        <li>Pick up the children from their classroom</li>
        <li>Do a book walk, read-aloud, post-reading activity</li>
        <li>Walk children back to the classroom and say goodbye</li>
        <li>Sign out at the office</li>
    </ul>

    <h2 class="cyan mt-3">The Format of a wee read Session</h2>
    <ul class="mb-3">
        <li>Select books from the wee read box of recommended reads (provided by the school). You will be reading with two children that have been identified by their teacher as good candidates for reading with you. Try to vary the type of book you read so the children hear both fiction and non-fiction text.</li>
        <li>Before you start reading to the children, do a ‘Book Walk’-- a stroll through the book, looking at the pictures and asking the children what they think it might be about.</li>
        <li>Read to your young friends, letting the words work their magic. Use lots of expression and enthusiasm! Pausing only a couple of times to ask the children questions or comment on the story in a way that will engage them. Ask questions that enhances their understanding, explain what a word means or draw out your young friend’s personal experiences that connect to the book you are reading. Engaged, interactive reading is “a merger of motivation and thoughtfulness”.</li>
        <li>Take time after you finish reading to talk about the book. Look in their faces and listen closely.</li>
        <li>Don’t TEST children on their comprehension, just ask them to tell you about the book. Have a fun and authentic ‘back and forth, give and take’ conversation and follow their lead. Give children lots of opportunities to think and to talk. Wait for their responses.</li>
        <li>Try focusing on important concepts and words from the text. Make the words seem interesting and appealing.</li>
        <li>Choose one of the extra activities to do after reading.</li>
        <li>End the session by walking your friends back to their classroom. This is a good time to keep talking together and focus on what’s special about reading. Learn about their interests so you can request books from the school that will engage them even more!</li>
    </ul>

    <a href="#" class="primary-btn float-left" id="goBack">< Back</a>
    <a href="getting-started.php" class="primary-btn float-right">Continue ></a>
</div>
<div class="spacer-50"></div>

<?php include('../../../includes/footer.php'); ?>