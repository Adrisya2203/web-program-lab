<?php
// Function to calculate electricity bill based on consumption
function calculateElectricityBill($consumption) {
    $bill = 0;

    if ($consumption <= 100) {
        $bill = $consumption * 0.10;
    } elseif ($consumption <= 300) {
        $bill = (100 * 0.10) + (($consumption - 100) * 0.15);
    } elseif ($consumption <= 500) {
        $bill = (100 * 0.10) + (200 * 0.15) + (($consumption - 300) * 0.20);
    } else {
        $bill = (100 * 0.10) + (200 * 0.15) + (200 * 0.20) + (($consumption - 500) * 0.25);
    }

    return $bill;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input
    $consumption = isset($_POST['consumption']) ? (float)$_POST['consumption'] : 0;

    // Validate input
    if ($consumption < 0) {
        echo "Consumption cannot be negative.";
    } else {
        // Calculate the bill
        $bill = calculateElectricityBill($consumption);
        echo "Your electricity bill for {$consumption} kWh is: $" . number_format($bill, 2);
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
    <form method="post" action="">
        <label for="consumption">Enter your electricity consumption (in kWh):</label>
        <input type="number" id="consumption" name="consumption" required>
        <input type="submit" value="Calculate Bill">
    </form>
</body>
</html>
