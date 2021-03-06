<?php 

    require('../../../includes/connection.php');
    require('../../../includes/functions.php');
    checkIfLoggedIn();
    include('../../../includes/head.php'); 

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan">Get Reading</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
   <p>Use all the tips and strategies you learned from your <em>wee read</em> training to read and interact with the children you’re volunteering to read with.</p>

   <h2 class="cyan">Finally</h2>
   <p>Make sure you are familiar with safety procedures and exits at your school! If you haven’t received an orientation to your school’s procedures, ask for one!</p>
   <p>Children look forward to your visits and will be very disappointed if you do not come when they are expecting you. If you know in advance that you will be away please tell them, and, notify the teacher.
    If you are unable to make a planned session, please phone the school, identify yourself as a <em>wee read</em> volunteer and ask for a message to be delivered to your friends' teacher. Hopefully this rarely, if ever, needs to happen.
    </p>
    <p>If you have questions about a child’s behaviour or issues related to your time together please talk with the school personnel.</p>
    <p>If you have general questions about the <em>wee read</em> program, ask the school personnel. No question is too small or too silly. They want you to be satisfied and excited volunteers who keep sharing your time with children.</p>
    <p class="mb-3">If you would like to continue reading with your young friends past the minimum eight weeks, let the school know.</p>

    <div class="d-flex justify-between align-middle volunteer-progression">
        <a href="#" class="primary-btn mt-1" id="goBack">< Back</a>
        <a href="congratulations.php" class="primary-btn mt-1">Continue ></a>
    </div>
</div>
<div class="spacer-50"></div>

<?php include('../../../includes/footer.php'); ?>