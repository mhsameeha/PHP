<?php 
class employee{
public $conn;

    function __construct(){
        $this->conn = new mysqli("localhost", "root", "", "sem3");
        if ($this->conn->connect_error) {
            die("Connection failed" . $this->conn->connect_error . "</br>");
        }
    }

    function __destruct(){
        $this->conn-> close();

    }
function add($name,$salary, $dob, $gender){
    $sql = "INSERT INTO employee (name, salary, dob, gender)
    VALUES ('$name',$salary, '$dob', '$gender')";
  if($this->conn->query ($sql)==TRUE){
      echo "New employee added successfully";
return true;
  } else {
      echo " Error adding new employee:" .$sql. "</br>" . $this->conn->error;
      return false;
  }
}
  function remove($employee_id){
    $sql = "DELETE FROM employee WHERE employee_id = $employee_id";
   if($this->conn->query ($sql)==TRUE){
    echo "Employee deleted successfully";
    return true;
} else {
    echo " Error deleting employee:" .$sql. "</br>" . $this->conn->error;
    return false;
}
  }
function updateProcess1($employee_id){
    $sql = "SELECT * FROM employee WHERE employee_id = $employee_id";
    $result = $this->conn->query($sql);
    $row = $result->fetch_assoc();
    return $row;
}

function updateProcess2($employee_id,$name,$gender,$dob,$salary){
    $sql = "UPDATE employee
SET name = '$name',
    gender = '$gender',
    dob = '$dob',
    salary = $salary
    WHERE employee_id = $employee_id";
if($this->conn->query ($sql)==TRUE){
    echo "Employee updated successfully";
    return true;
} else {
    echo " Error updating employee:" .$sql. "</br>" . $this->conn->error;
    return false;
}
    
}

function retrieve($employee_id){
    $sql = "SELECT * FROM employee WHERE employee_id = $employee_id";
    $result = $this->conn->query($sql);
    $row = $result->fetch_assoc();

    return $row;
}



function list(){
    $sql = "SELECT * FROM employee";
$result = $this->conn->query($sql);
return $result;
}

}



?>