<?php
// Step 1: Create an array of student names
$students = array("John", "Alice", "Bob", "Mary", "David");

// Step 2: Display the original array using print_r()
echo "Original Array (Unsorted):<br>";
print_r($students);
echo "<br><br>";

// Step 3: Sort the array in ascending order using asort()
asort($students);
echo "Array Sorted in Ascending Order (asort):<br>";
print_r($students);
echo "<br><br>";

// Step 4: Sort the array in descending order using arsort()
arsort($students);
echo "Array Sorted in Descending Order (arsort):<br>";
print_r($students);
?>

