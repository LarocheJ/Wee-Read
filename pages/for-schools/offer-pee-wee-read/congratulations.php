<?php 

    include('../../../includes/head.php'); 
    
?> 

<div class="container">
    <h1 class="cyan center medium-heading mt-3">Congratulations!</h1>
    <p class="center cyan large-body-txt mt-1">Now that you have finished the module, here is what you can do next:</p>
    <div class="center mt-5">
        <div class="d-grid col-2 resources">
            <div class="small-card">
                <img src="<?php print $home ?>/images/icons/survey.svg" alt="Survey icon">
                <a href="https://www.surveymonkey.com/r/BXFGMJC" target="_blank" class="button">Complete the Survey and Register Your Centre</a>
            </div>
            <div class="small-card">
                <img src="<?php print $home ?>/images/icons/resources.svg" alt="Resources icon">
                <a href="resources.php" class="button">Access additional resources</a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-center">
        <a href="getting-started.php" class="primary-btn center my-3" >< Back</a>
    </div>
</div>
<?php include('../../../includes/footer.php'); ?>