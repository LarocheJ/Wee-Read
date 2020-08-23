<?php

    require('../../../includes/connection.php');
    require('../../../includes/functions.php');
    checkIfLoggedIn();
    include('../../../includes/head.php'); 

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan">The first time together</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <p class="bold">Children will be curious about you even if they don’t ask you questions upon first meeting.
    Share with them:</p>
    <ul>
        <li>Your name! Help them learn to pronounce it!</li>
        <li>That you are excited to come each week to read and talk with them</li>
        <li>That you love reading yourself and hope they will too</li>
        <li>Something they might be interested to know about you (i.e.: "I have a cat named Mr. Freckles")</li>
    </ul>
    <p class="bold">Encourage them to tell you:</p>
    <ul>
        <li>Their names (and how to pronounce them properly)</li>
        <li>About themselves</li>
        <li>What they like doing for fun</li>
        <li>If they have any pets or siblings</li>
    </ul>
    <p>You might ask if they have a favourite book/author/TV program/video game, what they might want to be or do when they grow up, or any other kid-friendly questions.</p>

    <h2 class="cyan">Get Reading</h2>
    <p class="mb-3">Use the tips and strategies you learned from your <em>pee wee read</em> training to read and interact with the children you’re volunteering with.</p>

    <div class="d-flex justify-between align-middle volunteer-progression">
        <a href="#" class="primary-btn mt-1" id="goBack">< Back</a>
        <a href="finally.php" class="primary-btn mt-1">Continue ></a>
    </div>
</div>
<div class="spacer-50"></div>

<?php include('../../../includes/footer.php'); ?>