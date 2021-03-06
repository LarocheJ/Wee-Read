</div>
<footer>
<img class="footer-border" src="<?php print $home ?>/images/borders/border-footer.svg" alt="">
    <div class="container">
        <div class="d-flex vertical align-center">
            <a class="footer-logo" href="<?php print $home ?>"><img src="<?php print $home ?>/images/logos/wee-read-logo.svg" alt="Wee Read logo"></a>
            <div class="center mt-2 d-flex align-center vertical">
                <!--<p class="bold copyright">Copyright &copy; <?php print date('Y'); ?> wee read</p>-->
                <p class="bold copyright">wee read&trade; 2020</p>
                <p class="orange mt-0 trademark">wee read and pee wee read are initiatives of <a href="https://calgaryreads.com/" target="_blank" style="color:#F79020;">Calgary Reads</a>.</p>
            </div>
        </div>
        <div>
            <nav>
                <ul>
                    <li><a href="<?php print $home ?>/pages/wee-read">wee read</a></li>
                    <li><a href="<?php print $home ?>/pages/pee-wee-read">pee wee read</a></li>
                    <li><a href="<?php print $home ?>/pages/for-schools">for schools/centres</a></li>
                    <li><a href="<?php print $home ?>/pages/contact.php">contact</a></li>
                    <?php if(isset($_SESSION['email'])) { ?>
                        <li><a href="<?php print $home ?>/pages/profile.php">profile</a></li>
                    <?php } else { ?>
                        <li><a href="<?php print $home ?>/pages/login.php">Log In</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</footer>

<script src="<?php print $home ?>/js/scripts.js"></script>
<script>
    goBack.addEventListener("click", () => {
        window.history.back();
    });
</script>
</body>
</html>