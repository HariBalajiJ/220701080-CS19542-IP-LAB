<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$reg_no = $_GET['reg_no'];

$sql = "SELECT * FROM students WHERE reg_no = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $reg_no);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<p><strong>Registration Number:</strong> " . $row['reg_no'] . "</p>";
    echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
    echo "<p><strong>Course:</strong> " . $row['course'] . "</p>";
    echo "<p><strong>Department:</strong> " . $row['department'] . "</p>";
    echo "<p><strong>Year:</strong> " . $row['year'] . "</p>";
    echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
} else {
    echo "<p>No student found with this registration number.</p>";
}

$stmt->close();
$conn->close();
?>
