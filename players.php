<?php
// Step 1: Store names of Indian cricket players in an array
$players = array(
    "Sachin Tendulkar",
    "Virat Kohli",
    "MS Dhoni",
    "Rohit Sharma",
    "Kapil Dev",
    "Sunil Gavaskar",
    "Anil Kumble",
    "Rahul Dravid",
    "Sourav Ganguly",
    "Yuvraj Singh"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
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

<h2 style="text-align: center;">List of Indian Cricket Players</h2>

<table>
    <tr>
        <th>Player Name</th>
    </tr>
    <?php
    // Step 2: Display the names in an HTML table
    foreach ($players as $player) {
        echo "<tr><td>" . htmlspecialchars($player) . "</td></tr>";
    }
    ?>
</table>

</body>
</html>
