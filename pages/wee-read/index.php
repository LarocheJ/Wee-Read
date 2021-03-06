<?php 

    include('../../includes/head.php'); 
    
?> 

<div class="spacer-50"></div>
<div class="read-index-container">
    <div class="round-image-container">
        <div class="round-image wee-read"></div>
    </div>
    <div class="cyan">
        <h1 class="medium-heading my-2"><em>wee read</em></h1>
        <p>Welcome! <em>wee read</em> is for adults reading with children ages 5-7, who we call &lsquo;emerging&rsquo; or &lsquo;new&rsquo; readers. When you complete the <em>wee read</em> module, you will be confident to accompany school-age readers on their journey to reading mastery. </p>
        <p>If you have a student in your life, you can use the learning from the module to read with them. This initial training will take about one hour to complete. If you would like to train to volunteer to read with students in schools near you, you can progress to the School Volunteer Training. The initial training will take about one hour to complete. The School Volunteer Training will take about 30 minutes to complete.</p>
        <p>When you&#39;re ready to start the modules, you will need to make an account. We will never store or sell your personal information. Your account ensures that your progress will be saved should you choose to pause and return later. It will also allow you to access your Certificate of Completion and Supporting Resources once you have completed the module.</p>
        <?php if(isset($_SESSION['email'])) { ?>
            <a href="welcome.php?module=0" class="primary-btn">Get started</a>
        <?php } else { ?>
            <a href="../register.php?from-wee-read" class="primary-btn">Get started</a>
        <?php } ?>
    </div>
</div>

<?php include('../../includes/footer.php'); ?>