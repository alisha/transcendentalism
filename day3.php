<?php include 'header.php' ?>

<h1>Day 3</h1>

<h2>Meditation Reflections</h2>
<p>Before relaxing, my day was relaxing, which might have been an effect of the previous meditation sessions.</p>

<div class="panel panel-default quote">
    <div class="panel-body">
        "It was interesting to recognize and step back from my emotions instead of being focused on them. I feel more aware of both myself and my surroundings." - Journal entry
    </div>
</div>

<p>One clear trend in my meditation during this project is increased self-awareness. On this day, I noticed things like my shoulders being tense, and recognized details from previous days (like putting more weight on the right side). This day was a bit harder because I hadn't been as active beforehand, and so I felt a bit restless.</p>

<h2>Photography Reflections</h2>

<div class="panel panel-default quote">
    <div class="panel-body">
        "The meditation helps me be aware of myself and my balance...I'm surprised at how many samll, beautiful, and easily overlooked details can be found in nature. Each time I finished shooting an area in a certain way, there was another scene waiting." - Journal entry
    </div>
</div>

<p>On this day, I really appreciated the beauty of nature, just like Thoreau did when he lived near Walden Pond. This shows in how many photos I took - it was the most of any other day during this project. I found that my photos were not as shaky, which I think is because I could find my balance more easily after meditation.</p>

<h3 id="photos">Photos</h3>

<?php

    $photos = ["0637", "0638", "0641", "0645", "0647", "0648", "0652", "0653", "0657", "0660", "0663", "0665", "0668", "0669", "0672", "0674", "0676", "0679", "0684", "0687", "0695", "0696", "0699", "0703", "0705", "0706", "0709", "0713", "0715", "0717", "0720", "0723", "0724", "0727", "0729", "0730", "0731", "0734", "0737", "0741", "0742", "0747", "0754", "0757", "0762", "0765", "0769", "0773", "0776", "0778", "0784", "0787", "0794", "0797", "0799", "0803", "0816", "0821", "0826", "0830", "0844", "0848", "0852"];

    foreach ($photos as $name) {
        echo "<div class=\"col-md-3\" id=\"photo" . $name . "\">
                <a href=\"#photo" . $name . "\" class=\"thumbnail\">
                <img src=\"images/day3/DSCN" . $name . ".JPG\">
                </a>
            </div>";
    }
?>

<?php include 'footer.php' ?>