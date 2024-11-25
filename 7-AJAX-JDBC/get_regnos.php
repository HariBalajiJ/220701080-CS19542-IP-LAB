<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$reg_no = $_GET['reg_no'];

// Prepare and execute the SQL query
$sql = "SELECT * FROM students WHERE reg_no = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $reg_no);
$stmt->execute();
$result = $stmt->get_result();

// Check if any record was found and display the student details
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<p><strong>Registration Number:</strong> " . htmlspecialchars($row['reg_no']) . "</p>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($row['name']) . "</p>";
    echo "<p><strong>Course:</strong> " . htmlspecialchars($row['course']) . "</p>";
    echo "<p><strong>Department:</strong> " . htmlspecialchars($row['department']) . "</p>";
    echo "<p><strong>Year:</strong> " . htmlspecialchars($row['year']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
} else {
    echo "<p>No student found with this registration number.</p>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
