<?php 

    require('../../includes/connection.php');
    require('../../includes/functions.php');
    checkIfLoggedIn();
    include('../../includes/head.php'); 

?>

<div class="container">
    <h1 class="cyan center mt-3">Resources</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <ul class="center">
        <li><a href="<?php print $home ?>/files/wee-read/3Bs and where to find books.pdf">3Bs and where to find books</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/50 books to read.pdf">50 books to read</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/high frequency words.pdf">high frequency words</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/Play Rhyme Time.pdf">Play Rhyme Time</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/Reading Milestones Chart 2020.pdf">Reading Milestones Chart 2020</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/READING TRACKER.pdf">READING TRACKER</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/the wee read name game.pdf">the wee read name game</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/Tongue Twisters for every letter of the alphabet.pdf">Tongue Twisters for every letter of the alphabet</a></li>
    </ul>
    <div class="d-flex justify-center">
        <a href="complete.php" class="primary-btn float-left my-3" >< Back</a>
    </div>
</div>

<?php include('../../includes/footer.php'); ?>