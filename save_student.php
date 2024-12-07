<?php
include 'db_connect.php';

// Capture form data
$Reg_no = $_POST['Reg_no']; // This should be excluded from the INSERT query
$Surname = $_POST['Surname'];
$Middle_name = empty($_POST['Middle_name']) ? NULL : $_POST['Middle_name'];
$First_name = $_POST['First_name'];
$Course = $_POST['Course'];
$Age = $_POST['Age'];
$Guardian = empty($_POST['Guardian']) ? NULL : $_POST['Guardian'];
$Telno = $_POST['Telno'];

// Insert data into the database
$sql = "INSERT INTO students (Surname, Middle_name, First_name, Course, Age, Guardian, Telno)
        VALUES ('$Surname', '$Middle_name', '$First_name', '$Course', $Age, '$Guardian', '$Telno')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
