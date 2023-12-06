<?php
include "BS/header.php";
include "BS/menu.php";
require_once("employee.php");
$emp = new employee();
$result = $emp->list();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

<h2>Employee</h2>

<table class="table table-striped">
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

?>
</div>
</body>
</html>