<?php
function breakSentenceToWords($sentence)
{
    $words = explode(' ', @$sentence);
    return @$words;
}


function breakServicePageTitle($title)
{
    // Split the string into an array of words
    $words = explode(" ", $title);

    // Get the first two words
    $first_word = $words[0];
    $second_word = $words[1];

    // Get the remaining content except the last word
    $remaining_content = array_slice($words, 2, -1);

    // Get the last word
    $last_word = end($words);

    // Create the final array
    $array = array($first_word, $second_word);
    $array[] = implode(" ", $remaining_content);
    $array[] = $last_word;
    return $array;
}
