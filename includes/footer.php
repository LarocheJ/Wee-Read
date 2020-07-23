</div>
<footer>
<img class="footer-border" src="<?php print $home ?>/images/borders/border-footer.svg" alt="">
    <div class="container">
    <div>
        <a href="<?php print $home ?>"><img src="<?php print $home ?>/images/logos/wee-read-logo.svg" alt="Wee Read logo"></a>
        <p class="bold copyright">Copyright &copy; Wee Read <?php print date('Y'); ?></p>
    </div>
    <div>
        <nav>
            <ul>
                <li><a href="<?php print $home ?>/pages/wee-read">wee read</a></li>
                <li><a href="<?php print $home ?>/pages/pee-wee-read">pee wee read</a></li>
                <li><a href="<?php print $home ?>/pages/contact.php">contact</a></li>
                <?php if(isset($_SESSION['email'])) { ?>
                    <li><a href="<?php print $home ?>/pages/profile.php">Profile</a></li>
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