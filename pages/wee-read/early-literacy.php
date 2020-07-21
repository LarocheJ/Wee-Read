<?php 

    include('../../includes/head.php'); 

    $_SESSION['module'] = [];

    $module = 'wee-read';

    if(isset($_SESSION['module'])) {
        array_push($_SESSION['module'], $module);
    }
    
?>

<div class="container">
    <h1 class="cyan center">Early Literacy</h1>
    <img class="rainbow-border" src="<?php print $home ?>/images/borders/multi-coloured-border.svg" alt="">
    <p class="center">The important adults in young children’s lives are their first and best teachers.</p>
    <img class="rounded" src="<?php print $home ?>/images/stock/2017-06-01-5.jpg" alt="image">
    <p>“Early literacy” is everything children need to know about reading and writing to help them be ready to actually read and write. Early literacy skills begin to develop right from birth. Positive early experiences with books and language create the foundation for success in learning to read.</p>
    <p>This means helping a child continue to build <strong>Vocabulary</strong>, <strong>Print Awareness</strong>, <strong>Print Motivation</strong>, <strong>Narrative Skills</strong>, <strong>Letter Knowledge</strong>, and <strong>Phonological Awareness</strong>. You’ll learn more about each of these skills, and then move on to what you can do to help children develop them.</p>
    <p><strong>Vocabulary</strong> is how many words people know.. Children should know thousands of words by the time they reach grade three, which means they need to have heard millions of words before then!</p>
    <p><strong>Print Awareness</strong> is knowing that the world is full of symbols and letters, and that they have meaning. The children you’re working with should know the concept of a ‘word’ and how words work. Children should be able to recognize some of the words on the pages that you read with them.</p>
    <p><strong>Letter Knowledge</strong> is the ability to recognize and name letters. The children you’re working with might still find some letters and their corresponding sounds confusing, so practice will help them understand.</p>
    <p><strong>Phonological Awareness</strong> is understanding that words are made up of sounds and that those sounds have symbols that represent them. The children that you’re working with should be able to use the knowledge they have about sounds to “sound out” easy words when reading them.</p>
    <p><strong>Print Motivation</strong> is the spark that children need to have to even be interested in learning how to read in the first place. Children should love the idea of reading so much that they are motivated to work to learn how to do it.</p>
    <p><strong>Narrative Skills</strong> are storytelling skills. Knowing that stories have beginnings, middle parts, and endings, and are full of characters and information. This is true of stories that we find in books and the ones that children tell in real life. Providing opportunities for children to hear and tell personal stories is an important part of learning to read printed stories.
</p>

<a href="#" class="primary-btn float-left" id="goBack">< Back</a>
<a href="wee-read-format.php" class="primary-btn float-right">Save and Continue ></a>
    
</div>

<?php include('../../includes/footer.php'); ?>