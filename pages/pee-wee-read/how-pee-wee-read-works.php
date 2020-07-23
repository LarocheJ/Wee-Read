<?php 

    include('../../includes/head.php'); 

    $sql = "SELECT pee_wee_read_status FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($connection);
    $user = mysqli_real_escape_string($connection, $_SESSION['email']);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $row = mysqli_fetch_array($result);

    if($row['pee_wee_read_status'] == 7) {
        $wee_read_status = 8;
        $sql = "UPDATE users SET pee_wee_read_status=? WHERE email=?";
        $stmt = mysqli_stmt_init($connection);        

        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "is", $wee_read_status, $_SESSION['email']);
        mysqli_stmt_execute($stmt);
    }

?>

<div class="container">
    <h1 class="cyan center">How pee wee read Works</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <p>Now you know why pee wee read is important. Let’s explore more about how to do it. Here are 10 tools and tips to help me READ, SING, TALK, PLAY, AND LOVE every day!</p>
    <h2 class="cyan uppercase">Read</h2>
    <ol>
        <li>Choose books that we’ll both love. If you’re not excited to read a book, why would I be? It doesn’t matter if it’s a new book or one that we’ve read a hundred times already, if we love it, it’s building my brain! There’s a list of books that lots of people love in the Resource section so if we’re stuck, these are a pretty safe bet! </li>
        <li>Doctors know that young children need twenty minutes of reading every day to help our brains and bodies grow; but it doesn’t all have to happen at once. After all, sometimes my attention is still a little short, so if we have five minutes first thing in the morning, five minutes at lunch, and ten minutes at bedtime, we did it! Actually, when we spread it out through the day, I might get even more than twenty minutes, which is awesome, AND every time we read together it’s helping my attention and focus. Soon twenty minutes will be easy-peasy!</li>
    <h2 class="cyan uppercase">Sing</h2>
        <li>It doesn’t matter if you think you can’t carry a tune. I love your voice! Sing along to the radio, sing silly songs about losing your keys, sing songs with my name in them to show me that I’m a big deal in your life! Just play with music and words when you’re with me so I can hear it!</li>
        <li>Nursery Rhymes and kid-friendly songs you heard when you were young are a great place to start. It’s a cool way for you to connect your childhood with mine – some things never change! Rhymes help me predict which words might come next. Once I know “Twinkle, Twinkle, Little Star” you can say “how I wonder what you…” and wait for me to say “are!” It helps me feel successful that I knew the answer. I might surprise you by making a joke that doesn’t rhyme, which lets me experiment with language and develop my own voice.</li>
    <h2 class="cyan uppercase">Talk</h2>
        <li>I need to hear many words in a day to build my vocabulary, but remember, one of the biggest benefits of talking is the back-and-forth between us! Many ‘conversational turns’ in a day will strengthen my skills. Make sure you ask me questions and wait for and LISTEN TO my answers. My turn, your turn, my turn, your turn, all day long!</li>
        <li>Talk to me in the languages that you’re most confident about! Young children like me are masters at learning language, so we don’t get confused by hearing LOTS of languages. I can learn the language of my home easily from people who speak it all the time there, and the language of my care centre or school from people who speak it there. Friends and family and important people all around me might speak lots of languages. As long as they talk to me a lot, I can learn all of them, no problem!</li>
    <h2 class="cyan uppercase">Play</h2>
        <li>Sometimes people think that playing isn’t learning, but remember, it’s the BEST way to learn. My brain will remember and store information much better when I’m playing and doing than if it’s just being said near me or at me. There are lots of reasons that science gives us for why it works this way, but trust me, it works! Sometimes the hardest part of being a grown-up is not wanting to feel silly or foolish. You might forget what it’s like and not want to make mistakes. I need to see people make mistakes and be flexible in order for me to be the same way! You’re a great role model!</li>
        <li>If you don’t know where to start, follow my lead! I am an expert at playing, so if you just copy what I’m doing, I’ll know that it’s a game right away, and will help you understand what’s next. Pay attention to what makes me smile or laugh, or what makes me bounce, wiggle, jump, or shout! All of these things are making my brain light up – once you get going, it will make yours light up too! We are BOTH building our brains and the bond between us when we’re playful.</li>
    <h2 class="cyan uppercase">Love</h2>
        <li>Feeling safe with and important to you is what will make our reading time together so special. I might not remember every story that we share, every conversation we have, or every game we play, but I will always remember how it felt to be with you and enjoy reading together.</li>
        <li>When you love something and show me what your love looks like (by being excited, engaged or energized) it shows me that I might love it too. I will love the things you love, so if you want me to love reading, let me see you love reading! Let me “catch” you reading your own books, your own papers, your own notes. Show me that it’s valuable!</li>
    </ol>

    <a href="#" class="primary-btn float-left" id="goBack">< Back</a>
    <a href="key-points.php" class="primary-btn float-right">Save and Continue ></a>
</div>

<?php include('../../includes/footer.php'); ?>