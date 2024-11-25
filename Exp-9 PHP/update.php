<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM EMPDETAILS WHERE EMPID = $id";
    $result = mysqli_query($conn, $query);
    $employee = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $ename = $_POST['ename'];
    $desig = $_POST['desig'];
    $dept = $_POST['dept'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];

    $query = "UPDATE EMPDETAILS SET ENAME='$ename', DESIG='$desig', DEPT='$dept', DOJ='$doj', SALARY=$salary WHERE EMPID=$id";
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
    <title>Edit Employee</title>
</head>
<body>
    <h2>Edit Employee</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $employee['EMPID']; ?>">

        <label for="ename">Name:</label><br>
        <input type="text" name="ename" value="<?php echo $employee['ENAME']; ?>" required><br><br>

        <label for="desig">Designation:</label><br>
        <input type="text" name="desig" value="<?php echo $employee['DESIG']; ?>" required><br><br>

        <label for="dept">Department:</label><br>
        <input type="text" name="dept" value="<?php echo $employee['DEPT']; ?>" required><br><br>

        <label for="doj">Date of Joining:</label><br>
        <input type="date" name="doj" value="<?php echo $employee['DOJ']; ?>" required><br><br>

        <label for="salary">Salary:</label><br>
        <input type="text" name="salary" value="<?php echo $employee['SALARY']; ?>" required><br><br>

        <input type="submit" value="Update Employee">
    </form>
</body>
</html>
