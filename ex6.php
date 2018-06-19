<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inserting date</title>
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
/* sql to create table, here as structure reference
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
*/
$sql = "INSERT INTO my_first_table
VALUES ('to column1', 'to column2', 'to column3', 'to column4')";
if (mysqli_query($conn, $sql)) {
   echo "New record created.\n";
} else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}
mysqli_close($conn);
?>
    
</body>
</html>