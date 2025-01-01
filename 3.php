<?php
// Define tariff rates
define("TARIFF_1", 5);   // ₹5 per unit for first 100 units
define("TARIFF_2", 7);   // ₹7 per unit for next 100 units (101-200)
define("TARIFF_3", 10);  // ₹10 per unit for units above 200

// Function to calculate bill based on units consumed
function calculateBill($units) {
    $totalBill = 0;
    
    if ($units <= 100) {
        $totalBill = $units * TARIFF_1;
    } elseif ($units <= 200) {
        // First 100 units at ₹5/unit, remaining units at ₹7/unit
        $totalBill = (100 * TARIFF_1) + (($units - 100) * TARIFF_2);
    } else {
        // First 100 units at ₹5/unit, next 100 units at ₹7/unit, remaining units at ₹10/unit
        $totalBill = (100 * TARIFF_1) + (100 * TARIFF_2) + (($units - 200) * TARIFF_3);
    }

    return $totalBill;
}

// Get user input (e.g., units consumed) via a simple HTML form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = $_POST['units'];
    
    // Validate if the input is numeric and positive
    if (is_numeric($units) && $units >= 0) {
        $billAmount = calculateBill($units);
        echo "<h2>Your Electricity Bill</h2>";
        echo "<p>Units Consumed: " . $units . "</p>";
        echo "<p>Total Bill: ₹" . number_format($billAmount, 2) . "</p>";
    } else {
        echo "<p style='color: red;'>Please enter a valid number of units (positive number).</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>
<body>

    <h1>Electricity Bill Calculator</h1>
    <form method="post">
        <label for="units">Enter Units Consumed:</label>
        <input type="number" name="units" id="units" required min="0">
        <input type="submit" value="Calculate Bill">
    </form>

</body>
</html>

