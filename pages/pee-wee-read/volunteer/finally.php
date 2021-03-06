<?php 

    require('../../../includes/connection.php');
    require('../../../includes/functions.php');
    checkIfLoggedIn();
    include('../../../includes/head.php'); 

?>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="center cyan">Finally</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <img class="width-300 margin-auto" src="<?php print $home ?>/images/tukay/tukay_social_noshadow.png" alt="">

    <ul class="mb-3">
        <li>Make sure you are familiar with safety procedures and emergency exits at your centre! If you haven’t received an orientation to those procedures, ask for one!</li>
        <li>Children look forward to your visits and will be very disappointed if you do not come when they are expecting you. If you know in advance that you will be away please tell them.</li>
        <li>If you can’t make a session, please phone the centre, identify yourself as a <em>pee wee read</em> volunteer and ask for a message to be delivered to your reading friends. Hopefully this rarely, if ever, needs to happen.</li>
        <li>If you have questions about a child’s behaviour or issues related to your time together please talk with the onsite administrator.</li>
        <li>If you have general questions about the <em>pee wee read</em> program, ask the administrator. No question is too small or too silly. It is important you feel knowledgeable and satisfied and are an excited volunteer who keeps sharing your time with children.</li>
        <li>If you would like to continue reading with your young friends past the minimum eight weeks just let the centre know.</li>
    </ul>

    <div class="d-flex justify-between align-middle volunteer-progression">
        <a href="#" class="primary-btn mt-1" id="goBack">< Back</a>
        <a href="whats-next.php" class="primary-btn mt-1">Continue ></a>
    </div>

</div>
<div class="spacer-50"></div>

<?php include('../../../includes/footer.php'); ?>