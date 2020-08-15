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

    if($row['pee_wee_read_status'] == 5) {
        $wee_read_status = 6;
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
    <h1 class="cyan center">Read, Sing, Talk, Play and Love EVERY day! Here&#39;s why:</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    
    <h2 class="cyan uppercase">Read</h2>
    <div class="d-flex">
        <div>
            <img src="<?php print $home ?>/images/stock/IMG_7172.jpg" alt="Dad reading to his daughter under some drapes">
        </div>
        <div>
            <p>Books are great tools for learning. Kids need to know about books and how they work before they get to school. They need to know what a book is, how to turn pages, and how to recognize pictures and words in stories. They need to love books and feel they are exciting and fun. If a child already knows and loves books when they get to school, they will be ready to read! </p>
            <p>Books are full of  &ldquo;rare words&rdquo; – words that we don&#39;t hear all the time. Some words are common, like the places we go all the time, the foods we eat, and the people we know. Books are written by people all over the world, so they introduce us to new experiences and ideas. For example, I know the word &lsquo;snow&#39; because I live in a snowy place, but the word &lsquo;ocean&#39; was one I learned from a book, and then I understood it when I got to see the ocean for the first time! Reading every day teaches new words and new knowledge, and is the biggest way to boost success in life.

</p>
        </div>
    </div>
    
    <h2 class="cyan uppercase">Sing</h2>
    <p>Singing and experiencing music provides &ldquo;full-brain activation&rdquo;. Music requires all the different parts of our brains to process. Singing strengthens brain connections and builds a stronger foundation every time we do it. Lyrics, words, and singing light up my brain's language and speech centres. Rhythm and tempo light up my brain's computation and math centres. Feeling vibrations, dancing, and movement are processed in my brian&#39;s motor cortex and the emotions of songs are processed in my brain's limbic system.</p>
    <p>Music also helps break down language! In a song, every syllable of a word gets it&#39;s own note, and every note gets it&#39;s own beat, which means we feel it in our bodies. It slows down language so that language-learning children can hear the patterns more clearly. It&#39;s also a great mnemonic device, which means it helps us remember things. That&#39;s why we sing the ABCs! Singing every day helps us use and understand language better!</p>
    <h2 class="cyan uppercase">Talk</h2>
    <p>Talking helps build my brain in many different ways. It especially helps build my communication and social skills because talking uses back-and-forth or &ldquo;serve-and-return&rdquo; relationships. First, I make a sound or say something, then you pay attention to what I did and you say something back to me. We keep doing this, back-and-forth which helps me learn how to communicate. Communication is how school and the world works, so it&#39;s really important that I learn how to do it early in my life. The best way to learn is to practice!</p>
    <p>Remember when I said children need to know thousands of words in order to be ready for school? In order to know thousands, children have to have heard millions of words. The higher the number, the better I will do in school and in life – that&#39;s a fact! How can you make sure children hear millions of words? Talk with us all the time! About what we&#39;re doing, what you&#39;re thinking about, what we&#39;re looking at. Name things around us and things that we're interested in. Take turns and wait for a child to say things; imitate what they're saying and respond carefully, because their sounds are important! Encourage us to tell you things, and be silly with your words, face, and body. Get down on our level so we&#39;re eye-to-eye or so that we&#39;re both looking at something from the same place. All this will help your child feel important to you. Talking with us all day and every day is one of the biggest predictors of success later in life!</p>
    <h2 class="cyan uppercase">Play</h2>
    <div class="d-flex">
        <div>
            <p>Playing is the brain&#39;s favourite way to learn. Play is built into the deepest parts of our brains. When we&#39;re playing, we&#39;re engaged, attentive, active, and ready. We&#39;re curious, creative, and confident. We are learning by doing. We&#39;re problem-solving. We&#39;re experimenting. We&#39;re exploring. We&#39;re often laughing or energized, which means our body systems are locking information into our memories and bonding us with the people we&#39;re playing with. </p>
            <p>Play helps us master social and emotional skills. Playing is also how we balance our physical and mental health. Play makes connections in brains stronger and faster. When we get to school the skills we need are curiosity, creativity, experimentation, exploration, and problem-solving. Playing every day builds brains that are already good at learning.</p>
        </div>
        <div>
            <img src="<?php print $home ?>/images/stock/Reading Place-33.jpg" alt="Dad reading to his daughter in the dark while his daughter is pointing a flashlight to illuminate the room">
        </div>
    </div>
    
    <h2 class="cyan uppercase">Love</h2>
    <p>Love is something that every brain needs, every day, to help it stay healthy.</p>
    <p>With family, love might mean sharing smiles, eye contact, cuddles and hand-holding. It might mean crawling into cozy spaces, building towers, cooking, cleaning, being part of the action. It means knowing how to say &lsquo;yes please&#39; or &lsquo;no thank you&#39; to things like more tickles or kisses. It means experiencing safe and loving relationships.</p>
    <p>With friends, love might mean learning about differences and similarities, shared interests and personal preferences. It means practicing boundaries, collaboration, sharing and caring.</p>
    <p>With important adults like teachers, coaches, mentors, and leaders, love might mean having role-models, guides, and safe people to ask questions of without feeling silly. It means knowing about trust and respect.</p>
    <p>Feeling loved and loving others every day helps our brains grow healthy and strong so we're always ready to learn from the people in our lives. Spending time together reading is a powerful way to show this love!</p>

    <div class="d-flex justify-between align-center my-3 progression">
        <div>
            <a href="whats-next.php" class="primary-btn float-left">< Back</a>
        </div>
        <div>
            <p class="bold cyan center large-body-txt mb-0"><?php print $row['pee_wee_read_status']?> of 10</p>
            <p class="cyan center mt-0">modules completed</p>
        </div>
        <div>
            <a href="how-pee-wee-read-works.php?module=7" class="primary-btn float-right">Save and Continue ></a>
        </div>
    </div>

</div>

<?php include('../../includes/footer.php'); ?>