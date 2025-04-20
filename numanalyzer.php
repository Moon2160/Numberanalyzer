<?php
// Number Analyzer: Console-based PHP application

// Function to validate if all elements are numeric
function isValidNumberList($numbers) {
    foreach ($numbers as $num) {
        if (!is_numeric($num)) {
            return false;
        }
    }
    return true;
}

// Main loop to keep analyzing until user types 'exit'
while (true) {
    echo "Enter a list of numbers separated by spaces (or type 'exit' to quit): ";
    $input = trim(fgets(STDIN));

    if (strtolower($input) === 'exit') {
        echo "Exiting program. Goodbye!\n";
        break;
    }

    // Split input into an array
    $numberStrings = explode(' ', $input);

    // Remove empty entries and reindex array
    $numberStrings = array_values(array_filter($numberStrings, fn($val) => trim($val) !== ''));

    // Validate numbers
    if (!isValidNumberList($numberStrings)) {
        echo "Error: Please enter only valid numbers separated by spaces.\n\n";
        continue;
    }

    // Convert all entries to float
    $numbers = array_map('floatval', $numberStrings);

    // Calculations
    $max = max($numbers);
    $min = min($numbers);
    $sum = array_sum($numbers);
    $average = $sum / count($numbers);

    // Output results
    echo "\n=== Results ===\n";
    echo "Maximum: $max\n";
    echo "Minimum: $min\n";
    echo "Sum: $sum\n";
    echo "Average: " . number_format($average, 2) . "\n\n";
}
