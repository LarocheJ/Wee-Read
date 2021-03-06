<?php

    require('../../../includes/connection.php');
    require('../../../includes/functions.php');
    checkIfLoggedIn();
    include('../../../includes/head.php'); 

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan">Optional Activities</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <p>After you’re done reading a book, and if the children are interested, try one of the extra activities from the Resource Section:</p>
    <ul class="mb-3">
        <li>The Name Game</li>
        <li>Nursery Rhymes</li>
        <li>Letter Hunt</li>
        <li>Animal Sounds</li>
    </ul>
    
    <div class="d-flex justify-between align-middle volunteer-progression">
        <a href="#" class="primary-btn mt-1" id="goBack">< Back</a>
        <a href="first-time-together.php" class="primary-btn mt-1">Continue ></a>
    </div>
</div>

<?php include('../../../includes/footer.php'); ?>