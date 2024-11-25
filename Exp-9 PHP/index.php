<?php
include 'db.php';


$query = "SELECT * FROM EMPDETAILS";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>
<body>
    <h2>Employee Details</h2>
    <a href="create.php">Add New Employee</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>EMPID</th>
                <th>ENAME</th>
                <th>DESIG</th>
                <th>DEPT</th>
                <th>DOJ</th>
                <th>SALARY</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['EMPID']; ?></td>
                    <td><?php echo $row['ENAME']; ?></td>
                    <td><?php echo $row['DESIG']; ?></td>
                    <td><?php echo $row['DEPT']; ?></td>
                    <td><?php echo $row['DOJ']; ?></td>
                    <td><?php echo $row['SALARY']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['EMPID']; ?>">Edit</a> | 
                        <a href="delete.php?id=<?php echo $row['EMPID']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
