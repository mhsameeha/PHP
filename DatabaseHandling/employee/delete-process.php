<?php
$employee_id = $_GET["employee_id"];
$conn = new mysqli("localhost", "root", "", "sem3");
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error . "</br>");
}
$sql = "DELETE FROM employee WHERE employee_id = $employee_id";
if($conn->query ($sql)==TRUE){
    echo "Employee deleted successfully";
    header("Location:list.php");
} else {
    echo " Error deleting employee:" .$sql. "</br>" . $conn->error;
}
$conn-> close();


?>