<?php
// Array to store the names of Indian cricket players
$players = array(
    "Virat Kohli",
    "Rohit Sharma",
    "MS Dhoni",
    "Shikhar Dhawan",
    "Hardik Pandya",
    "Rishabh Pant",
    "KL Rahul",
    "Jasprit Bumrah",
    "Ravindra Jadeja",
    "Bhuvneshwar Kumar"
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
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>List of Indian Cricket Players</h2>

    <table>
        <tr>
            <th>Sr. No.</th>
            <th>Player Name</th>
        </tr>

        <?php
        // Loop through the array and display each player's name in the table
        $counter = 1;
        foreach ($players as $player) {
            echo "<tr>";
            echo "<td>" . $counter . "</td>";
            echo "<td>" . $player . "</td>";
            echo "</tr>";
            $counter++;
        }
        ?>
    </table>
</body>
</html>

