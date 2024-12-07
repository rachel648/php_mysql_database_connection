<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="save_student.php" method="POST">
        <label>Reg No:</label>
        <input type="text" name="Reg_no" required><br>
        <label>Surname:</label>
        <input type="text" name="Surname" required><br>
        <label>Middle Name:</label>
        <input type="text" name="Middle_name"><br>
        <label>First Name:</label>
        <input type="text" name="First_name" required><br>
        <label>Course:</label>
        <input type="text" name="Course" required><br>
        <label>Age:</label>
        <input type="number" name="Age" required><br>
        <label>Guardian:</label>
        <input type="text" name="Guardian"><br>
        <label>Tel No:</label>
        <input type="text" name="Telno" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
