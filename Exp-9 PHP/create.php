<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ename = $_POST['ename'];
    $desig = $_POST['desig'];
    $dept = $_POST['dept'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO EMPDETAILS (ENAME, DESIG, DEPT, DOJ, SALARY) VALUES ('$ename', '$desig', '$dept', '$doj', $salary)";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
</head>
<body>
    <h2>Add New Employee</h2>
    <form method="POST" action="">
        <label for="ename">Name:</label><br>
        <input type="text" name="ename" required><br><br>

        <label for="desig">Designation:</label><br>
        <input type="text" name="desig" required><br><br>

        <label for="dept">Department:</label><br>
        <input type="text" name="dept" required><br><br>

        <label for="doj">Date of Joining:</label><br>
        <input type="date" name="doj" required><br><br>

        <label for="salary">Salary:</label><br>
        <input type="text" name="salary" required><br><br>

        <input type="submit" value="Add Employee">
    </form>
</body>
</html>
