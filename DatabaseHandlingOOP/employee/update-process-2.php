<?php
$employee_id = $_GET["employee_id"];
$name = $_GET["name"];
$gender = $_GET["gender"];
$dob = $_GET["dob"];
$salary = $_GET["salary"];

require_once("employee.php");
$emp = new employee();

$result = $emp->updateProcess2($employee_id,$name,$gender, $dob,$salary);

if ($result){
header("Location:list.php");}
else{
    echo "Error";
}




?>