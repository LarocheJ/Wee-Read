<?php include('../../includes/head.php'); ?>

<div class="spacer-50"></div>
<div class="read-index-container">
    <div class="round-image-container">
        <div class="round-image pee-wee-read"></div>
    </div>
    <div class="cyan">
        <h1 class="medium-heading my-2">pee wee read</h1>
        <p>Welcome! <em>pee wee read</em> is for adults reading with children ages 3-5, who we call ‘pre-readers’. When you complete the <em>pee wee read</em> module, you will be confident in your ability to accompany very young children on their early literacy journeys. If you have a very young child in your life, you can use the learning from the module to read with them. If you would like to train to volunteer to read with very young children in early learning and childcare centres near you, you can progress to the Early Learners’ Volunteer Training. The initial training will take about two hours to complete. The Early Learners’ Volunteer Training will take another hour to complete.</p>
        <p>When you’re ready to start the modules, you will need to make an account. We will never store or sell your personal information. Your account ensures that your progress will be saved should you choose to pause and return later. It will also allow you to access your Certificate of Completion and Supporting Resources once you have completed the module.</p>
        <?php if(isset($_SESSION['email'])) { ?>
            <a href="welcome.php" class="primary-btn">Get started</a>
        <?php } else { ?>
            <a href="../register.php?from-pee-wee-read" class="primary-btn">Get started</a>
        <?php } ?>
    </div>
</div>

<?php include('../../includes/footer.php'); ?>