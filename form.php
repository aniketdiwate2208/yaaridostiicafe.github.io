<form method="POST" action="form.php">
    <label>First Name</label>
    <input type = "text" placeholder = "First Name" name = "fname"></input>
    <br><br>
    <label>Last Name</label>
    <input type="text" placeholder = "Last Name" name ="lname"></input>
    <br><br>
    <input type="submit" name="send"></input>
</form>

<?php
//super global variable 
//1)$_POST[];
//2)$_GET[];
if(isset($_POST['send']))
{
   $firstname = $_POST['fname'];
   $lastname = $_POST['lname'];
   require 'db1.php';
   mysqli_query($con,"INSERT INTO  mytable  (first_name,last_name) VALUES ('$firstname','$lastname')");

}

?>


