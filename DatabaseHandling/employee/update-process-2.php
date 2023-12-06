<?php
$employee_id = $_GET["employee_id"];
$name = $_GET["name"];
$gender = $_GET["gender"];
$dob = $_GET["dob"];
$salary = $_GET["salary"];
$conn = new mysqli("localhost", "root", "", "sem3");
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error . "</br>");
}
$sql = "UPDATE employee
SET name = '$name',
    gender = '$gender',
    dob = '$dob',
    salary = '$salary'
    WHERE employee_id = $employee_id";
if($conn->query ($sql)==TRUE){
    echo "Employee updated successfully";
    header("Location:list.php");
} else {
    echo " Error updated employee:" .$sql. "</br>" . $conn->error;
}
$conn-> close();





?>