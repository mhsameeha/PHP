<?php
$employee_id = $_GET["employee_id"];
require_once("employee.php");
$emp = new employee();
$result = $emp->remove($employee_id);

if ($result){
    header("Location:list.php");}
    else{
        echo "Error";
    }

?>