<?php

// Main program loop
while (true) {

	echo "=== Odd or Even Checker ===\n";

	echo "Enter a number (or type 'exit' to quit): ";

	$input = trim(fgets(STDIN));

	// Exit condition
	if (strtolower($input) === 'exit') {
		echo "Exiting program. Goodbye!\n";
		break;
	}

	// Validate input
	if (!is_numeric($input) || strpos($input, '.') !== false) {
		echo "Invalid input. Please enter a valid integer.\n\n";
		continue;
	}

	// Convert input to integer if needed
	$number = (int)$input;

	// Check if the number is odd or even
	if ($number % 2 == 0) {
		echo "The number $number is Even.\n\n";
	} else {
		echo "The number $number is Odd.\n\n";
	}
}
