<?php
// erase whitespace from character in strings
function erasewhitespace($string) {
    $string = str_replace(" ", "", $string);
    return $string;
}

// prevent invalid characters or special chars 
function checkinput($string) {
    $string = preg_match_all("/[^A-Za-z0-9- ]/", $string);
    return $string;
}
?>