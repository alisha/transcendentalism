<?php include 'header.php' ?>

<h1>Day 1</h1>

<h2>Meditation Reflections</h2>
<p>Before I meditated for the first time for the project, I had a mix of positive and negative actions; I was excited for the Thanksgiving break and spending time with my family, but also frustrated with computer science problems and politics.</p>

<div class="panel panel-default quote">
    <div class="panel-body">
        "I feel so calm right now...it felt so good to focus on myself and the immediate environment. I haven't been this self-aware of every part of my body since the mindfulness unit in Sophomore Health" - Journal entry
    </div>
</div>

<p>After meditiating, I felt an immediate change in my mood. I felt extremely calm and relaxed, no longer feeling pulled towards both excitement and frustration. The activity was a little difficult, as I was just picking it up again - it was hard to focus on my breathing without controlling it. Overall though, I learned new things about myself and my body from the introspection, such as the fact that I still breathe like a singer!</p>

<h2>Photography Reflections</h2>

<div class="panel panel-default quote">
    <div class="panel-body">
        "The photography was great because I focused only on the photos and on nature...I understand Thoreau's high regard for nature" - Journal entry
    </div>
</div>

<p>This day was my first time seriously trying out photography, with a specific purpose (highlighting the beauty of nature). Although I had this purpose in my mind, I still found the activity to be free and full of choices - I didn't feel forced to do it in certain ways, and so I just followed my instincts. I enjoyed focusing on small details, and through this, I understood why Thoreau found so much peace in nature.</p>

<h3 id="photos">Photos</h3>

<?php

    $photos = ["0364", "0365", "0366", "0371", "0373", "0375", "0380", "0387", "0390", "0395", "0398", "0400", "0405", "0411", "0411", "0413", "0417", "0422", "0423", "0424"];

    foreach ($photos as $name) {
        echo "<div class=\"col-md-3\">
                <a href=\"#photos\" class=\"thumbnail\">
                <img src=\"images/day1/DSCN" . $name . ".JPG\">
                </a>
            </div>";
    }
?>

<?php include 'footer.php' ?>