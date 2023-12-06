<?php





?>

<html>


<h1>Employee Application form</h1>
<form method="GET" action="process.php">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" style="margin:10px;" name="fname"> <br>
    <label for="lname">Last Name:</label>
    <input type="text" id="lname" style="margin:10px;" name="lname"> <br>
    <label for="gender">Gender: </label>
    <label for="female">Female </label>
    <input type="radio" id="female" name="female">
    <label for="male">Male </label>
    <input type="radio" id="male" name="male"> <br>
    <label for="address">Address:</label>
    <input type="text" style="margin:10px;" id="address" name="address"> <br>
    <label for="bod">BOD:</label>
    <input type="date" style="margin:10px;" id="bod" name="bod"> <br>
    <label for="employeeid">Employee ID:</label>
    <input type="text" style="margin:10px;" id="employeeid" name="employeeid"> <br>
    <label for="district">District:</label>
    <select name="district[]" multiple style="margin:10px;" id="district">
        <option name="kandy" value="kandy">Kandy</option>
        <option name="colombo" value="colombo">Colombo</option>
        <option name="kurunegala" value="kurunegala">Kurunegala</option>
        <option name="nuwaraeliya" value="nuwaraeliya">Nuwara Eliya</option>
    </select> <br>
    <button style="margin:5px;">Submit</button>
    <button style="margin:5px;">Clear</button>
</form>

</html>