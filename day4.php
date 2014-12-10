<?php include 'header.php' ?>

<h1>Day 1</h1>

<h2>Meditation Reflections</h2>
<p></p>

<h2>Photography Reflections</h2>
<p></p>

<h3 id="photos">Photos</h3>

<?php

    $photos = ["0880", "0885", "0888", "0897", "0905", "0907", "0914", "0919", "0922", "0927", "0930", "0936", "0943", "0952", "0962", "0965", "0966", "0970", "0973", "0975", "0992", "0995", "0999", "1003"];

    foreach ($photos as $name) {
        echo "<div class=\"col-md-3\">
                <a href=\"#photos\" class=\"thumbnail\">
                <img src=\"images/day4/DSCN" . $name . ".JPG\">
                </a>
            </div>";
    }
?>

<?php include 'footer.php' ?>