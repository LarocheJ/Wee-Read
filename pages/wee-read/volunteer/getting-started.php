<?php 

    require('../../../includes/connection.php');
    require('../../../includes/functions.php');
    checkIfLoggedIn();
    include('../../../includes/head.php'); 

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan">Getting Started</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
   <ul>
        <li>First, ensure you sign in as a visitor in the school office. This is an important safety regulation at schools.</li>
        <li>Be sure you have a plan for choosing the books to read that day.  In the <em>wee read</em> box you will find great read aloud books in all kinds of genres – animal stories, fairy tales, information books, poetry, alphabet books, and so much more!</li>
        <li>Then, pick up your <em>wee read</em> friends from their classroom. Don&#39;t forget to introduce yourself and tell them your name. Keep doing this as young children may forget your name at first. As you walk to your assigned reading area have a chat with them about school, their interests, books, etc.</li>
        <li>Look together at the selection and choose one or two books. If you don&#39;t get to the second book begin with it next time. Remember children need to hear stories multiple times so re-reading is good!</li>
   </ul>

    <h2 class="cyan">The First <em>wee read</em> Time Together</h2>
    <p>Children will be curious about you even if they don’t ask you questions upon first meeting.</p>

    <p class="bold">Share with them:</p>
    <ul>
        <li>Your name and how to pronounce it</li>
        <li>That you are excited to come each week to read and talk with them</li>
        <li>That you love reading yourself and hope they will too</li>
        <li>Something they might be interested to know about you (i.e.: &ldquo;I have a cat named Mr. Freckles&rdquo;)</li>
    </ul>
    <p class="bold">Encourage them to tell you:</p>
    <ul class="mb-3">
        <li>Their names – children appreciate when adults learn how to pronounce their name properly</li>
        <li>What they like doing in school and after school</li>
        <li>If they have any pets or siblings</li>
        <li>Ask if they have a favourite book/author/TV program etc.</li>
        <li>What they might want to be or do when they grow up</li>
    </ul>

    <div class="d-flex justify-between align-middle volunteer-progression">
        <a href="#" class="primary-btn mt-1" id="goBack">< Back</a>
        <a href="get-reading.php" class="primary-btn mt-1">Continue ></a>
    </div>
</div>
<div class="spacer-50"></div>

<?php include('../../../includes/footer.php'); ?>