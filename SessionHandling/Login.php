<?php
session_start();
$userName = $_GET["uname"];
$password = $_GET["pwd"];

// echo $userName . "</br>";
// echo $password . "</br>";
$_SESSION["user"] = $userName;
if (isset($_SESSION["user"])){
    echo $_SESSION["user"] . "|" . "<a href = 'LogOut.php'> Logout </a> </br>";
}
else{
echo "Guest </br>". "|" . "<a href = 'LoginForm.php'> Login </a>";
}
?> 

<html>
-- <a href="Courses.php">Courses</a>
<p>Contact us</p>
<p>About us</p>


</html>
