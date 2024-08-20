<?php
// Include the function definition
include 'palindromeChecker.php'; // Assuming the function is in a file named isPalindrome.php

// Sample inputs
$strings = [
    "A man, a plan, a canal, Panama!",
    "Was it a car or a cat I saw?",
    "Hello, World!",
    "Madam In Eden, I’m Adam",
    "No lemon, no melon"
];

// Check each string and display whether it is a palindrome
foreach ($strings as $str) {
    $isPalin = isPalindrome($str) ? 'Yes' : 'No';
    echo "Is \"$str\" a palindrome? $isPalin<br>";
}
?>
