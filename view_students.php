<?php
include 'db_connect.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Registered Students</h2>";
    echo "<table border='1'>
            <tr>
                <th>Reg No</th>
                <th>Surname</th>
                <th>Middle Name</th>
                <th>First Name</th>
                <th>Course</th>
                <th>Age</th>
                <th>Guardian</th>
                <th>Tel No</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Reg_no']}</td>
                <td>{$row['surname']}</td>
                <td>{$row['Middle_name']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['course']}</td>
                <td>{$row['age']}</td>
                <td>{$row['guardian']}</td>
                <td>{$row['Telno']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No students registered.";
}

$conn->close();
?>
