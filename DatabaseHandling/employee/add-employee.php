<?php





?>

<html>

<?php
include "menu.php";
?>
<h1>New Employee</h1>
<form method="GET" action="add-process.php">
    <label for="name">Name:</label>
    <input type="text" id="name" style="margin:10px;" name="name"> <br>
    <label for="gender">Gender: </label>
    <label for="female">Female </label>
    <input type="radio" name="gender" value ="F">
    <label for="male">Male </label>
    <input type="radio" name="gender" value="M"> <br>
    <label for="dob">dob:</label>
    <input type="date" style="margin:10px;" id="dob" name="dob"> <br>
    <label for="salary">Salary:</label>
    <input type="text" id="salary" style="margin:10px;" name="salary"> <br>
    <!-- <label for="employeeid">EmployeeID:</label>
    <input type="text" style="margin:10px;" id="employeeid" name="employeeid"> <br>
    <label for="departmentid">DepartmentID:</label>
    <input type="text" style="margin:10px;" id="departmentid" name="departmentid"> <br> -->
    <button style="margin:5px;">Submit</button>
    <button style="margin:5px;">Clear</button>
</form>

</html>