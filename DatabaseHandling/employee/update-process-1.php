<html>
<?php
include "menu.php";
?>

<h1>Update employee information</h1>
<?php
$employee_id = $_GET["employee_id"];
$conn = new mysqli("localhost", "root", "", "sem3");
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error . "</br>");
}
$sql = "SELECT * FROM employee WHERE employee_id = $employee_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>





<form method="GET" action="update-process-2.php">
    <input type="hidden" style="margin:10px;" id="employee_id" name="employee_id" value="<?php echo $row['employee_id'];?>" > <br>
    <label for="name">Name:</label>
    <input type="text" id="name" style="margin:10px;" name="name" value="<?php echo $row['name'];?>"> <br>
    <label for="gender">Gender: </label>
    <label for="female">Female </label>
    <input type="radio" name="gender" value="F" <?php if ($row['gender']=='F'){echo 'checked';}?>>
    <label for="male">Male </label>
    <input type="radio" name="gender" value="M" <?php if ($row['gender']=='M'){echo 'checked';}?>> <br>
    <label for="dob">dob:</label>
    <input type="date" style="margin:10px;" id="dob" name="dob" value="<?php echo $row['dob'];?>"> <br>
    <label for="salary">Salary:</label>
    <input type="text" id="salary" style="margin:10px;" name="salary" value="<?php echo $row['salary'];?>"> <br>
    <label for="departmentid">DepartmentID:</label>
    <input type="text" style="margin:10px;" id="departmentid" name="departmentid" value="<?php echo $row['department_id'];?>"> <br>
    <button style="margin:5px;">Submit</button>
    <button style="margin:5px;">Clear</button>
</form>

</html>

<?php 
$conn->close();
?>