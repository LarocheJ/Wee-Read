<?php

    require('../../../includes/connection.php');
    require('../../../includes/functions.php');
    checkIfLoggedIn();
    include('../../../includes/head.php'); 

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan">Overview of Volunteer Sessions</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <ul>
        <li>When you enter the centre, you'll sign in with an administrator.</li>
        <li>Then you'll choose 2-3 books to read. Make sure they’re ones you’re excited to read aloud.</li>
        <li>Scan the books in preparation for reading them so you feel confident about sharing them.</li>
        <li>Make sure you build the excitement for reading. Be flexible with your plan for the reading time. Sometimes you might read first, and sometimes you might have a conversation or do an activity first. Remember not to “force it” and to keep the idea of reading fun!</li>
        <li>Before you start reading to the children, do a ‘Book Walk’. Stroll through the book, looking at the pictures and asking the children what they think it might be about. Even if you’re volunteering with very young children who can’t or won’t answer back, leave time quiet time after asking a question to show them where an answer would go. If they gesture or make sounds, answer them as if those were words: “Oh! That’s so interesting! I hadn’t thought about that!”</li>
        <li>Then read the book aloud to the children, pausing only a couple of times during reading to ask the children questions or comment on the story in a way that will engage them.</li>
    </ul>

    <h2 class="cyan mt-3">The flexible format of a pee wee read time together</h2>
    <ul class="mb-3">
        <li>Select books from the pee wee read box of recommended reads provided by the centre. You will be reading with a couple of children who have been identified by their teachers and caregivers as good candidates for reading with you. Try to vary the type of books you read so the children hear both fiction and non-fiction texts.</li>
        <li>Read to your young friends, letting the words work their magic. Use lots of expression and enthusiasm! Pause every so often to pose a question that enhances their understanding, explain what a word means, or draw out your young friend’s personal experiences that might connect to the book you are reading. Warm, responsive interactions are the keys to serve and return relationships.</li>
        <li>Take time after you finish reading to talk about the book. Look into the children’s faces and listen closely.</li>
        <li>DON’T test children on their comprehension, just ask them to tell you about the book. Have a ‘back and forth, give and take’ conversation and follow their lead.</li>
        <li>Try focusing on important concepts and words from the text. At this age, when children are first learning about letters and sounds, spend lots of time talking about “juicy words” (rare words or words that are fun to say) and being playful with language.</li>
        <li>Afterwards, you'll spend some time talking about the book. There are also a few games or activities you can do. Be sure to give the children lots of opportunities to talk.</li>
        <li>End the session by thanking the children and expressing your excitement to read again. This is a good time to focus on what’s special about reading. Learn about their interests so you can request books from the centre that will engage them even more next time!</li>
        <li>Sign out from the centre.</li>
    </ul>

    <a href="#" class="primary-btn float-left" id="goBack">< Back</a>
    <a href="optional-activities.php" class="primary-btn float-right">Continue ></a>
</div>
<div class="spacer-50"></div>

<?php include('../../../includes/footer.php'); ?>