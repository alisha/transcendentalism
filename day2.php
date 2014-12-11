<?php include 'header.php' ?>

<h1>Day 2</h1>

<h2>Meditation Reflections</h2>
<p>Day 2 was Thanksgiving, so I was very excited that day for dinner with my family, including my brother, and his friend. I was also in a good mood because I was thinking about what I was grateful for. However, I was a little worried about my CS50 final project, which caused some stress.</p>

<div class="panel panel-default quote">
    <div class="panel-body">
        "Again, I feel very calm and more focused after the meditation...Overall, I feel more in touch with myself, and I think both Thoreau and Emerson would encourage this introspection." - Journal entry
    </div>
</div>

<p>After meditation, I felt tranquil again. I became aware of new aspects of my body, such as leaning slightly towards the right and my face being tense. I also become more aware of my surroundings, as we were told to let sounds come to us, but to not actively listen. My mind wandered a bit, but I was able to bring back my focus into the activity.</p>

<h2>Photography Reflections</h2>

<div class="panel panel-default quote">
    <div class="panel-body">
        "Photography was really enjoyable because I focused only on my surroundings and how I interacted with them. I felt very in touch with nature" - Journal entry
    </div>
</div>

<p>Just like Day 1, I loved photography. I felt a lot closer to nature by setting out to capture its beauty, and finding it in unexpected places. I felt that my increased awareness of myself and my surroundings from meditation really helped my photography. I didn't stop taking photos until it was too cold to continue!</p>

<h3 id="photos">Photos</h3>

<?php

    $photos = ["0426", "0427", "0431", "0434", "0442", "0443", "0447", "0448", "0459", "0467", "0473", "0476", "0479", "0481", "0486", "0490", "0500", "0509", "0512", "0515", "0521", "0528"];

    foreach ($photos as $name) {
        echo "<div class=\"col-md-3\" id=\"photo" . $name . "\">
                <a href=\"#photo" . $name . "\" class=\"thumbnail\">
                <img src=\"images/day2/DSCN" . $name . ".JPG\">
                </a>
            </div>";
    }
?>

<?php include 'footer.php' ?>