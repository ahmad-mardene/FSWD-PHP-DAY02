<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "database_ex4";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
$sql = "CREATE TABLE My_first_table (
    first_column INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    second_column VARCHAR(20) NOT NULL,
    third_column VARCHAR(20) NOT NULL,
    fourth_column VARCHAR(50)
    )";
    if (mysqli_query($conn, $sql)) {
       echo "Table My_first_table created successfully" . "\n";
    } else {
       echo "Error creating table: " . mysqli_error($conn) . "\n";
    }
mysqli_close($conn);
?>
    
</body>
</html>