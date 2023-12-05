<?php
session_start();

require 'my_data.php';

// If the current verse is empty, set it to a random verse
if (empty($_SESSION['currentVerse'])) {
    $_SESSION['currentVerse'] = array_rand($verse_collection);
} 

echo '<div class="container d-flex justify-content-center">';
    echo '<div class="card mb-3 cardbox col-lg-6 col-8 bg-transparent border border-light-subtle">';
    echo '<div class="card-body">';
        echo '<span id ="verse"></span></span><span id="caret">▌</span>';
    echo "</div>";

    echo '<div class="card-footer border border-light-subtle border-0">';
        echo '<div class="d-flex justify-content-end">';
            echo '<small>';
                // will echo which verse this was taken from
                echo '<span id="verseReference" class="fst-italic">';
            echo '</small>';
        echo '</div>';
    echo '</div>';

    echo '</div>';
echo '</div>';
?>