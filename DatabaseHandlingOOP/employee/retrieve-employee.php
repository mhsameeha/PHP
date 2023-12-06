<?php 
include "BS/header.php";
include "BS/menu.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class ="container">
<h2>Retrieve Employee</h2>
<form action="retrieve-process-1.php" method="GET">
<div class="mb-3 mt-3">
<label for="employee_id" class="form-label">Employee_ID</label>
<input type="text" class="form-control"  name="employee_id">
</div>
<button type="submit" class="btn btn-primary">Show</button>
<button type="reset" class="btn btn-primary">Clear</button></form>
</div>
</body>
</html>