<?php 
session_start();
if (isset($_SESSION["user"])){
    echo $_SESSION["user"] . "|" . "<a href = 'LogOut.php'> Logout </a>";
}
else{
echo "Guest </br>". "|" . "<a href = 'LoginForm.php'> Login </a>";
}
echo " <h2> Courses </h2>";

?>