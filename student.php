<?php
// Step 1: Store names of students in an array
$students = array("John", "Alice", "Bob", "Charlie", "Diana");

// Step 2: Display the original array using print_r
echo "Original Array:\n";
print_r($students);

// Step 3: Sort the array in ascending order using asort
asort($students);
echo "\nSorted Array (Ascending):\n";
print_r($students);

// Step 4: Sort the array in descending order using arsort
arsort($students);
echo "\nSorted Array (Descending):\n";
print_r($students);
?>
