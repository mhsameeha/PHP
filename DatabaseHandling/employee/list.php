<?php
include "menu.php";
?>
<?php

$conn = new mysqli("localhost", "root", "", "sem3");
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error . "</br>");
}

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);?>
<h2>Employee</h2>
<table border="1">
    <tr>
        <th>Employee_ID</th>
        <th>Name</th>
        <th>Salary</th>
        <th>DOB</th>
        <th>Department_ID</th>
    </tr>



<?php
while ($row = $result->fetch_assoc()) {
    echo"<tr>";
        echo "<td>". $row["employee_id"] . "</td>";
        echo "<td>". $row["name"] . "</td>";
        echo "<td>". $row["salary"] . "</td>";
        echo "<td>". $row["dob"] . "</td>";
        echo "<td>". $row["department_id"] . "</td>";
    echo "</tr>";
    
}
echo"</table>";

$conn->close();
?>