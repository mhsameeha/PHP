<?php
include "BS/header.php";
include "BS/menu.php";
$employee_id = $_GET["employee_id"];
require_once("employee.php");
$emp = new employee();
$row = $emp->updateProcess1($employee_id);
?>
<html>
    <head>

    </head>
    <body>
        <div class="container">
<h1>Update employee information</h1>
<form method="GET" action="update-process-2.php">
<div class="mb-3 mt-3">
    <input type="hidden" style="margin:10px;" id="employee_id" name="employee_id" value="<?php echo $row['employee_id'];?>" > <br>
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" style="margin:10px;" name="name" value="<?php echo $row['name'];?>"> <br>
    <label for="gender">Gender: </label>
    <div class="form-check">
    <label for="female">Female </label>
    <input type="radio"  class="form-check-input" name="gender" value="F" <?php if ($row['gender']=='F'){echo 'checked';}?>> </div>
    <div class="form-check">
    <label for="male">Male </label>
    <input type="radio"  class="form-check-input" name="gender" value="M" <?php if ($row['gender']=='M'){echo 'checked';}?>> </div> <br>
    <label for="dob" class="form-label">DOB:</label>
    <input type="date" class="form-control" style="margin:10px;" id="dob" name="dob" value="<?php echo $row['dob'];?>"> <br>
    <label for="salary" class="form-label">Salary:</label>
    <input type="text" class="form-control" id="salary" style="margin:10px;" name="salary" value="<?php echo $row['salary'];?>"> <br>
    <label for="departmentid" class="form-label">DepartmentID:</label>
    <input type="text" class="form-control" style="margin:10px;" id="departmentid" name="departmentid" value="<?php echo $row['department_id'];?>"> <br>
</dive>
<button type="submit" class="btn btn-primary">Submit</button>
<button type="Reset" class="btn btn-primary">Reset</button>
</form>
</div>
    </body>
</html>