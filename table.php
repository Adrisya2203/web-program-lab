<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$accession_number = $title = $authors = $edition = $publisher = "";
$search_title = "";
$search_results = [];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_book'])) {
        // Add book to the database
        $accession_number = htmlspecialchars(trim($_POST['accession_number']));
        $title = htmlspecialchars(trim($_POST['title']));
        $authors = htmlspecialchars(trim($_POST['authors']));
        $edition = htmlspecialchars(trim($_POST['edition']));
        $publisher = htmlspecialchars(trim($_POST['publisher']));

        $sql = "INSERT INTO books (accession_number, title, authors, edition, publisher) VALUES ('$accession_number', '$title', '$authors', '$edition', '$publisher')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New book added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['search_book'])) {
        // Search for the book by title
        $search_title = htmlspecialchars(trim($_POST['search_title']));
        $sql = "SELECT * FROM books WHERE title LIKE '%$search_title%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $search_results[] = $row;
            }
        } else {
            echo "No results found.";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Add Book</h2>
<form method="POST" action="">
    <input type="text" name="accession_number" placeholder="Accession Number" required>
    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="authors" placeholder="Authors" required>
    <input type="text" name="edition" placeholder="Edition">
    <input type="text" name="publisher" placeholder="Publisher">
    <input type="submit" name="add_book" value="Add Book">
</form>

<h2>Search Book</h2>
<form method="POST" action="">
    <input type="text" name="search_title" placeholder="Enter book title" required>
    <input type="submit" name="search_book"
