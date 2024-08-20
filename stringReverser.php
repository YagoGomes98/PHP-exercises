<?php 

function reverseString($str) {
    return strrev($str);
}

// Sample input from a user (e.g., from a form)
$userName = "JohnDoe";

// Reverse the user's name
$reversedName = reverseString($userName);

// Output the result
echo "Original Name: " . $userName . "<br>";
echo "Reversed Name: " . $reversedName;
