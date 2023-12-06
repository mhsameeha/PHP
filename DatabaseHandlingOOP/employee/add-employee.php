

<?php
include "BS/header.php";
include "BS/menu.php";

?>
<html>
    <head></head>
    <body>
        <div class="container">
<h1>New Employee</h1>
<form method="GET" action="add-process.php">
<div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" style="margin:10px;" name="name" required> <br>
    <label for="gender" class="form-label">Gender: </label>
    <div class="form-check">
    <label for="female">Female </label>
    <input type="radio" class="form-check-input" name="gender" value ="F" required> </div>
    <div class="form-check">
    <label for="male">Male </label>
    <input type="radio" class="form-check-input" name="gender" value="M" required> </div> <br>
    <label for="dob" class="form-label">DOB:</label>
    <input type="date" class="form-control" style="margin:10px;" id="dob" name="dob" required> <br>
    <label for="salary" class="form-label">Salary:</label>
    <input type="text" class="form-control" id="salary" style="margin:10px;" name="salary" required> <br>
    <!-- <label for="employeeid">EmployeeID:</label>
    <input type="text" style="margin:10px;" id="employeeid" name="employeeid"> <br>
    <label for="departmentid">DepartmentID:</label>
    <input type="text" style="margin:10px;" id="departmentid" name="departmentid"> <br> -->
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<button type="Reset" class="btn btn-primary">Reset</button>
</form>
</div>
    </body>
</html>