<?php
// Define the function to find the missing number
function findMissingNumber($arr, $n) {
    // Calculate the expected sum of the first n numbers
    $expectedSum = ($n * ($n + 1)) / 2;
    
    // Calculate the actual sum of the elements in the array
    $actualSum = array_sum($arr);
    
    // The missing number is the difference between the expected and actual sums
    return $expectedSum - $actualSum;
}

// Suppose we have numbers from 1 to 5, but 3 is missing
$numbers = [1, 2, 4, 5]; // Array length is 4, so n = 5
$n = 5; // The expected length including the missing number

// Find the missing number
$missingNumber = findMissingNumber($numbers, $n);

// Output the result
echo "The missing number is: " . $missingNumber;

