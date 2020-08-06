<?php

    require('../../../includes/connection.php');
    require('../../../includes/functions.php');
    checkIfLoggedIn();
    include('../../../includes/head.php'); 

?>

<div class="spacer-50"></div>
<div class="container">
<h1 class="center cyan medium-heading">Congratulations!</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <div class="center mb-3">
        <p>You have completed the <em>wee read</em> training. Please use what you have learned and the resources provided to guide you in the powerful <em>wee read</em> process.</p>
        <p>Thank you for committing to come to the school every week and help children to become confident and joyful readers!</p>
    </div>

    <h1 class="center cyan">What’s next?</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">

    <ul class="center">
        <li>Check out the Resources</li>
        <li><a href="https://www.surveymonkey.com/r/BXFGMJC" target="_blank">Complete the Survey</a></li>
        <li>Sign up for our post-training emails! We’ll never spam!</li>
        <li>Find a centre near you to volunteer at or recommend one in your area to become a pee wee read location</li>   
    </ul>

    <div class="d-flex align-center justify-between mt-3">
        <a href="#" class="primary-btn" id="goBack">< Back</a>
        <a href="../volunteer" class="primary-btn">Back to volunteer home page</a>
        <a href="../../profile.php" class="primary-btn">Back to profile</a>
    </div>
    
</div>
<div class="spacer-50"></div>

<?php include('../../../includes/footer.php'); ?>