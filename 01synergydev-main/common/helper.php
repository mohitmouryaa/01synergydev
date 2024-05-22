<?php
function breakSentenceToWords($sentence){
    $words = explode(' ', @$sentence);
    return @$words;
}
?>