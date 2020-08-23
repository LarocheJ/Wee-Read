<?php 

    require('../../includes/connection.php');
    require('../../includes/functions.php');
    checkIfLoggedIn();
    include('../../includes/head.php'); 

    $sql = "SELECT pee_wee_read_status FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $row = mysqli_fetch_array($result);

    if($row['pee_wee_read_status'] == 6) {
        $wee_read_status = 7;
        $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<script>
    window.onload = function() {
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>

<div class="spacer-50"></div>
<div class="container">
    <h1 class="cyan center">How <em>pee wee read</em> Works</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <img class="tukay-img" src="<?php print $home ?>/images/tukay/tukay_social_noshadow.png" alt="Tukay">
    <p>Now you know why <em>pee wee read</em> is important. Let&#39;s explore more about how to do it. Here are 10 tools and tips to help me READ, SING, TALK, PLAY, AND LOVE every day!</p>
    <h2 class="cyan uppercase">Read</h2>
    <ul>
        <li>Choose books that we&#39;ll both love. If you&#39;re not excited to read a book, why would I be? It doesn&#39;t matter if it&#39;s a new book or one that we&#39;ve read a hundred times already, if we love it, it&#39;s building my brain! There&#39;s a list of books that lots of people love in the Resource section.</li>
        <li>Doctors know that young children need twenty minutes of reading every day to help our brains and bodies grow; but it doesn&#39;t have to happen all at once. Sometimes my attention is still a little short and if we read five minutes first thing in the morning, five minutes at lunch, and ten minutes at bedtime, we did it! Actually, when we spread it out through the day, I might even get more than twenty minutes, which is awesome, AND every time we read together it&#39;s helping my attention and focus grow.</li>
    <h2 class="cyan uppercase">Sing</h2>
        <li>It doesn&#39;t matter if you think you can&#39;t carry a tune. I love your voice! Sing along to the radio, sing silly songs about losing your keys, sing songs with my name to show me that I&#39;m a big deal in your life! Just play with music and words when we're together.</li>
        <li>Nursery Rhymes and kid-friendly songs you heard when you were young are a great place to start. It&#39;s a cool way for you to connect your childhood with mine. Rhymes help me predict which words might come next. Once I know “Twinkle, Twinkle, Little Star” you can say &ldquo;how I wonder what you…&rdquo; and wait for me to say &ldquo;are!&rdquo; It helps me feel successful that I knew the answer. I might surprise you by making a joke that doesn&#39;t rhyme, which lets me experiment with language and develop my own voice.</li>
    <h2 class="cyan uppercase">Talk</h2>
        <li>I need to hear many words in a day to build my vocabulary, but remember, one of the biggest benefits of talking is the back-and-forth between us! Many &lsquo;conversational turns&rsquo; in a day will strengthen my skills. Make sure you ask me questions and wait for and LISTEN TO my answers. My turn, your turn, my turn, your turn, all day long!</li>
        <li>Talk to me in the languages that you&#39;re most confident about! Young children like me are masters at learning language, so we don&#39;t get confused by hearing many languages. I can learn the language of my home easily from people who speak it all the time there, and the language of my care centre or school from people who speak it there. Friends and family and important people around me might speak many languages. As long as they talk to me a lot, I can learn all of them, no problem!</li>
    <h2 class="cyan uppercase">Play</h2>
        <li>Sometimes people think that playing isn&#39;t learning, but remember, it&#39;s the BEST way to learn. My brain will remember and store information much better when I&#39;m playing and doing. Sometimes the hardest part of being a grown-up is not getting to play. You might forget that part of play is being silly, and foolish, and making mistakes. I need to see people being flexible in order for me to be the same way. You&#39;re a great role model!</li>
        <li>If you don&#39;t know where to start, follow my lead! I am an expert at playing, so if you just copy what I&#39;m doing, I&#39;ll know that it&#39;s a game right away, and will help you understand what&#39;s next. Pay attention to what makes me smile or laugh, or what makes me bounce, wiggle, jump, or shout! All of these things are making my brain light up. Once you get going, it will make yours light up too! We are BOTH building our brains and the bond between us when we&#39;re playful.</li>
    <h2 class="cyan uppercase">Love</h2>
        <li>Feeling important to you is what will make our reading time together so special. I might not remember every story that we share, every conversation we have, or every game we play, but I will always remember how it felt safe being with you and enjoy reading together.</li>
        <li>When you love something and show me what your love looks like by being excited, engaged or energized, it shows me that I might love it too. I will love the things you love, so if you want me to love reading, let me see you love reading! Let me &ldquo;catch&rdquo; you reading your own books, your own papers, your own notes. Show me that it&#39;s valuable!</li>
    </ol>

    <div class="d-flex justify-between align-center my-3 progression">
        <div>
            <a href="read-sing-talk-play-love.php" class="primary-btn float-left">< Back</a>
        </div>
        <div>
            <p class="bold cyan center large-body-txt mb-0"><?php print $row['pee_wee_read_status']?> of 10</p>
            <p class="cyan center mt-0">modules completed</p>
        </div>
        <div>
            <a href="key-points.php?module=8" class="primary-btn float-right">Save and Continue ></a>
        </div>
    </div>

</div>

<?php include('../../includes/footer.php'); ?>