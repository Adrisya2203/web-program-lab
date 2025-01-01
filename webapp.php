<?php
// Initialize an empty array to store names
$names = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name from the form and sanitize it
    $name = htmlspecialchars(trim($_POST['name']));
    
    // Add the name to the array
    if (!empty($name)) {
        $names[] = $name;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Submit Your Name</h2>
<form method="POST" action="">
    <input type="text" name="name" placeholder="Enter your name" required>
    <input type="submit" value="Submit">
</form>

<h2>Submitted Names</h2>
<table>
    <tr>
        <th>Name</th>
    </tr>
    <?php
    // Display the names in a table
    if (!empty($names)) {
        foreach ($names as $name) {
            echo "<tr><td>" . htmlspecialchars($name) . "</td></tr>";
        }
    }
    ?>
</table>

</body>
</html>
