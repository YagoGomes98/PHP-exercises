<?php 

// Define the isPalindrome function
function isPalindrome($str) {
    // Clean the string by removing non-alphanumeric characters and converting to lowercase
    $cleanedStr = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $str));
    // Check if the cleaned string is equal to its reverse
    return $cleanedStr === strrev($cleanedStr);
}

