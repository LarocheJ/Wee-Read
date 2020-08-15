<?php 

    require('../../includes/connection.php');
    require('../../includes/functions.php');
    checkIfLoggedIn();
    include('../../includes/head.php'); 

?>

<div class="container">
    <h1 class="cyan center mt-3">Resources</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <p>These downloadable files are further resouces to help with this course.</p>
    <ul>
        <li><a href="<?php print $home ?>/files/wee-read/3Bs and where to find books.pdf">3Bs and where to find books</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/50 books to read before you are 8.pdf"> 50 Books to Read Before You&#39;re 8</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/high frequency words.pdf">high Frequency Words</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/Play Rhyme Time.pdf">Play Rhyme Time</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/Reading Milestones Chart 2020.pdf">Reading Milestones Chart</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/READING TRACKER.pdf">Reading Tracker</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/the wee read name game.pdf">The wee read Name Game</a></li>
        <li><a href="<?php print $home ?>/files/wee-read/Tongue Twisters for every letter of the alphabet.pdf">Tongue Twisters</a></li>
        <li><a href="<?php print $home ?>#">Handbook for wee read Volunteers</a></li>
    </ul>
    <div class="d-flex justify-center">
        <a href="complete.php" class="primary-btn float-left my-3" >< Back</a>
    </div>
</div>

<?php include('../../includes/footer.php'); ?>