<?php include 'header.php' ?>

<h1>Day 4</h1>

<h2>Meditation Reflections</h2>
<p>This day was approaching the end of Thanksgiving break, and though I felt "efficient and motivated," I was also very worried about the amount of work I would get when I came back to school.</p>

<div class="panel panel-default quote">
    <div class="panel-body">
        "I feel very calm and in control...I feel determined and reassured that I can get everything done...It's interesting to learn so much about myself from this reflection and time in solitude - I think thoreau would agree on this value" - Journal entry
    </div>
</div>

<p>I truly appreciated the effects of meditation because I became more focused on how to get the work done instead of getting anxious over the amount of work there was to do.</p>

<h2>Photography Reflections</h2>
<p>The sun set earlier today, so I had to turn on the lights in front of my house to get some photos. I think it still turned out well because I was able to capture the contrast of details in nature with their shadows. I felt more comfortable during the photography process, as I wasn't afraid to kneel down on the damp ground in order to get the best angle.</p>

<h3 id="photos">Photos</h3>

<?php

    $photos = ["0880", "0885", "0888", "0897", "0905", "0907", "0914", "0919", "0922", "0927", "0930", "0936", "0943", "0952", "0962", "0965", "0966", "0970", "0973", "0975", "0992", "0995", "0999", "1003"];

    foreach ($photos as $name) {
        echo "<div class=\"col-md-3\" id=\"photo" . $name . "\">
                <a href=\"#photo" . $name . "\" class=\"thumbnail\">
                <img src=\"images/day4/DSCN" . $name . ".JPG\">
                </a>
            </div>";
    }
?>

<?php include 'footer.php' ?>