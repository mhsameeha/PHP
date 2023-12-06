<?php
$name = $_GET["name"];
$gender = $_GET["gender"];
$dob = $_GET["dob"];
$salary = $_GET["salary"];

$conn = new mysqli("localhost", "root", "", "sem3");
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error . "</br>");
}
$sql = "INSERT INTO employee (name, salary, dob, gender)
  VALUES ('$name',$salary, '$dob', '$gender')";
if($conn->query ($sql)==TRUE){
    echo "New employee added successfully";
    header("Location:list.php");
} else {
    echo " Error adding new employee:" .$sql. "</br>" . $conn->error;
}
$conn-> close();







?>