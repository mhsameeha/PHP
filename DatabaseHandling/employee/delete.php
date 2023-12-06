<?php
include "menu.php";
?>
<h2>Delete Employee</h2>
<form action="delete-process.php" method="GET">
<label for="employee_id">Employee_ID</label>
<input type="text" name="employee_id">
<input type="submit"value="Delete">
<input type="reset" value="Clear"></form>