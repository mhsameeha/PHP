<?php
$name = $_GET["name"];
$gender = $_GET["gender"];
$dob = $_GET["dob"];
$salary = $_GET["salary"];
require_once("employee.php");

$emp = new employee();

$result = $emp->add($name,$salary, $dob, $gender);

if ($result){
header("Location:list.php");}
else{
    echo "Error";
}







?>