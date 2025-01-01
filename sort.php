<?php
// Step 1: Initialize an array with student names
$students = array("Alice", "Bob", "Charlie", "David", "Eve");

// Step 2: Display the original list of student names using print_r
echo "Original list of students:\n";
echo"<pre>";
print_r($students);
echo"</pre>";

// Step 3: Sort the array in ascending order using asort() and display it
asort($students);
echo "\nSorted list in ascending order (asort):\n";
echo"<pre>";
print_r($students);
echo"</pre>";

// Step 4: Sort the array in descending order using arsort() and display it
arsort($students);
echo "\nSorted list in descending order (arsort):\n";
echo"<pre>";
print_r($students);
echo"</pre>";
?>

