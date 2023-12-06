

<?php
include "BS/header.php";
include "BS/menu.php";
$employee_id = $_GET["employee_id"];
require_once("employee.php");

$emp = new employee();

$result = $emp->retrieve($employee_id);
if(!$result){
    header("Location:list.php");

}

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

    echo"<tr>";
        echo "<td>". $result["employee_id"] . "</td>";
        echo "<td>". $result["name"] . "</td>";
        echo "<td>". $result["salary"] . "</td>";
        echo "<td>". $result["dob"] . "</td>";
        echo "<td>". $result["department_id"] . "</td>";
    echo "</tr>";
    

echo"</table>";

?>
</div>
</body>
</html>