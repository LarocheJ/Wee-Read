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
    <img class="width-300 margin-auto" src="<?php print $home ?>/images/tukay/Tukay_Reading_Feb9.png" alt="">
    <ul class="mt-3">
        <li>When you enter the centre, you'll sign in with an administrator.</li>
        <li>Then you'll choose 2-3 books to read. Make sure they’re ones you’re excited to read aloud.</li>
        <li>Scan the books in preparation for reading them so you feel confident about sharing them.</li>
        <li>Make sure you build the excitement for reading. Be flexible with your plan for the reading time. Sometimes you might read first, and sometimes you might have a conversation or do an activity first. Remember not to &ldquo;force it&rdquo; and to keep the idea of reading fun!</li>
        <li>Before you start reading to the children, do a ‘Book Walk’. Stroll through the book, looking at the pictures and asking the children what they think it might be about. Even if you’re volunteering with very young children who can’t or won’t answer back, leave quiet time after asking a question to show them where an answer would go. If they gesture or make sounds, answer their body language by saying: &ldquo;Oh! That’s so interesting! I hadn’t thought about that!&rdquo; or "I can tell by your big smile that you liked that part!"</li>
        <li>Then read the book aloud to the children, pausing only a couple of times during reading to ask the children questions or comment on the story in a way that will engage them.</li>
    </ul>

    <h2 class="cyan mt-3">The flexible format of a <em>pee wee read</em> time together</h2>
    <ul class="mb-3">
        <li>Select books from the <em>pee wee read</em> box of recommended reads provided by the centre. You will be reading with a couple of children who have been identified by their teachers and caregivers as good candidates for reading with you. Try to vary the type of books you read so the children hear both fiction and non-fiction texts.</li>
        <li>Read to your young friends, letting the words work their magic. Use lots of expression and enthusiasm! Pause every so often to pose a question that enhances their understanding, explain what a word means, or draw out your young friends' personal experiences that might connect to the book you are reading. Warm, responsive interactions are the keys to serve and return relationships.</li>
        <li>Take time after you finish reading to talk about the book. Look into the children’s faces and listen closely.</li>
        <li>DON’T test children on their comprehension, just ask them to tell you about the book. Have a ‘back and forth, give and take’ conversation and follow their lead.</li>
        <li>Try focusing on important concepts and words from the text. At this age, when children are first learning about letters and sounds, spend lots of time talking about &ldquo;juicy words&rdquo; (rare words or words that are fun to say) and being playful with language.</li>
        <li>Afterwards, you'll spend some time talking about the book. There are also a few games or activities you can do. Be sure to give the children lots of opportunities to talk.</li>
        <li>End the session by thanking the children and expressing your excitement to read again. This is a good time to focus on what’s special about reading. Learn about their interests so you can request books from the centre that will engage them even more next time!</li>
        <li>Sign out from the centre.</li>
    </ul>

    <div class="d-flex justify-between align-middle volunteer-progression">
        <a href="#" class="primary-btn mt-1" id="goBack">< Back</a>
        <a href="optional-activities.php" class="primary-btn mt-1">Continue ></a>
    </div>
</div>
<div class="spacer-50"></div>

<?php include('../../../includes/footer.php'); ?>