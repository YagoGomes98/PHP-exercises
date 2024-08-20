<?php
// Define the reverseString function without using built-in methods
function reverseString($str) {
    $reversed = ''; // Initialize an empty string to hold the reversed result
    $length = strlen($str); // Get the length of the input string

    // Loop through the string from end to start
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i]; // Append each character to the reversed string
    }

    return $reversed; // Return the reversed string
}

// Sample input
$userName = "JohnDoe";

// Reverse the user's name
$reversedName = reverseString($userName);

// Output the result
echo "Original Name: " . $userName . "<br>";
echo "Reversed Name: " . $reversedName;

