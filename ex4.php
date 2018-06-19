<!DOCTYPE html>
<html>

<head>
    <title>new Datebase</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "database_ex4";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
   echo "Database $dbname created successfully! \n";
} else {
   echo "Error creating database $dbname: " . mysqli_error($conn);
}

?>

 
</body>

</html>