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
                <li><a href="">wee read</a></li>
                <li><a href="">pee wee read</a></li>
                <li><a href="">contact</a></li>
                <li><a href="">profile</a></li>
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