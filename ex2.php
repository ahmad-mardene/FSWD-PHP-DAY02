<!DOCTYPE html>
<html>
<head>
       <title>PHP form example: POST</title>
</head>
<body>
<form action="ex2.php" method="POST">
Name: <input type="text" name="name" /> <br><br>
Surname: <input type="text" name="surname" /><br><br>
<input type="submit" name="submit" />
</form>
<?php
if(isset($_POST['submit']))
{
if( $_POST["name"] && $_POST["surname"] )
{
echo "Welcome ". $_POST['name']. "  ".  $_POST['surname'];
}
}


if($_POST["name"]=='')
    echo "please enter your first name. ";
   
if($_POST["surname"]=='')
    echo "please enter your surname.";




?>
</body>
</html>