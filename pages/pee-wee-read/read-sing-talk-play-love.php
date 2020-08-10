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
    <h1 class="cyan center">Read, Sing, Talk, Play and Love EVERY day! Here’s why</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    
    <h2 class="cyan uppercase">Read</h2>
    <div class="d-flex">
        <div>
            <img src="<?php print $home ?>/images/stock/IMG_7172.jpg" alt="Dad reading to his daughter under some drapes">
        </div>
        <div>
            <p>Books are full of information and are our best tools for learning. Books becomes especially important in school, so kids need to know about books and how they work before we get there. We need to know what a book is, how to turn pages, and how to recognize pictures and words in stories. We need to love books and feel they are exciting and fun. If I’ve never touched a book before I get to my classroom, there is so much I have to learn before I can begin to learn how to read, but if I already know and love books, I am ready to read! Books are also full of what we call “rare words” – words that we don’t hear all the time. Some words are common, like the places I go all the time, the foods I eat, and the people I know, but because books are written by people all over the world, they introduce me to experiences and ideas I can’t have where I live. For example, I know the word ‘snow’ because I live in a pretty snowy place, but the word ‘ocean’ was one I learned from a book, and then I understood it when I got to see the ocean for the first time! For a kid who lives near the ocean, ‘snow’ might be a ‘rare word’! Reading every day teaches new words and new knowledge, and the number of books I have access to is the biggest way to boost my success in life.</p>
        </div>
    </div>
    
    <h2 class="cyan uppercase">Sing</h2>
    <p>Singing and experiencing music does “full-brain activation”. Music requires all the different parts of our brains to process, which means singing strengthens brain connections and builds a stronger foundation every time we do it. Lyrics, words, and singing light up my language and speech centres; rhythm and tempo light up my computation and math centres; feeling vibrations, dancing, and movement are processed in my motor cortex and, the emotions of songs are processed in my limbic system. Music also helps break down language! In a song, every part of a word (or ‘syllable’) gets it’s own note, and every note gets it’s own beat, which means we feel it in our bodies. It slows down language so that language-learners like me can hear the patterns more clearly. It’s also a great mnemonic device, which means it helps us remember things. That’s why we sing the ABCs! Singing every day helps me use and understand language better!</p>
    <h2 class="cyan uppercase">Talk</h2>
    <p>Talking helps build my brain in many different ways, but it especially helps build my communication and social skills. Talking uses back-and-forth or “serve-and-return” relationships. First, I make a sound or say something, then you pay attention to what I did and you say something back to me. We keep doing this, back-and-forth which helps me learn how to communicate. That communication is how school and the world works, so it’s really important that I learn how to do it early in my life. The best way to learn is to practice! Remember when I said I need to know thousands of words in order to be ready for school? In order to know thousands, I have to have heard millions of words. The higher the number, the better I will do in school and in life – that’s a fact! How do you make sure I hear millions of words? Talk with me all the time! About what we’re doing, what you’re thinking about, what we’re looking at. Name things around us and things that I’m interested in. Take turns and wait for me to say things; imitate what I’m saying and respond carefully, because my sounds are important! Encourage me to tell you things, and be silly with your words, face, and body. Get down on my level so we’re eye-to-eye or so that we’re both looking at something from the same place. All this will help me feel important to you. Talking with me all day and every day is one of the biggest predictors of my success later in life!</p>
    <h2 class="cyan uppercase">Play</h2>
    <div class="d-flex">
        <div>
            <p>Playing is the brain’s favourite way to learn. Play is built into the deepest parts of our brains. When we’re playing, we’re engaged, attentive, active, and ready. We’re curious, creative, and confident. We are learning by doing. We’re problem-solving. We’re experimenting. We’re exploring. We’re often laughing or energized, which means our body systems are giving out lots of hormones that help lock information into our memories and bond us with the people we’re playing with. Play helps us master social and emotional skills. Playing is also how I balance my physical and mental health. Play makes connections in brains stronger and faster -- the ones needed most when we get to school are curiosity, creativity, experimentation, exploration, problem-solving. Playing every day builds brains that are already good at learning.</p>
        </div>
        <div>
            <img src="<?php print $home ?>/images/stock/Reading Place-33.jpg" alt="Dad reading to his daughter in the dark while his daughter is pointing a flashlight to illuminate the room">
        </div>
    </div>
    
    <h2 class="cyan uppercase">Love</h2>
    <p>Love is something that every brain needs, every day, to help it stay healthy. </p>
    <p>If I’m with my family, love might mean sharing smiles, eye contact, cuddles and hand-holding. It might mean crawling into cozy spaces, building towers, cooking, cleaning, being part of the action. It means knowing how to say ‘yes please’ or ‘no thank you’ to things like more tickles or kisses. It means experiencing safe and loving relationships. </p>
    <p>If I’m with my friends, love might mean learning about differences and similarities, shared interests and personal preferences. It means practicing boundaries, collaboration, sharing and caring. </p>
    <p>If I’m with important adults like teachers, coaches, mentors, and leaders, love might mean having role-models, guides, and safe people to ask questions of without feeling silly. It means knowing about trust and respect. </p>
    <p>Feeling loved and loving others every day helps my brain grow healthy and strong so it is always ready to learn from the people in my life. Spending time together reading is a powerful way to show this love!</p>

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