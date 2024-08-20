<?php
// Define the fizzBuzz function
function fizzBuzz() {
    // Loop through numbers from 1 to 100
    for ($i = 1; $i <= 100; $i++) {
        // Check if the number is a multiple of both 3 and 5
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz<br>";
        }
        // Check if the number is a multiple of 3
        elseif ($i % 3 == 0) {
            echo "Fizz<br>";
        }
        // Check if the number is a multiple of 5
        elseif ($i % 5 == 0) {
            echo "Buzz<br>";
        }
        // Print the number itself if none of the above conditions are met
        else {
            echo $i . "<br>";
        }
    }
}

// Call the fizzBuzz function
fizzBuzz();

