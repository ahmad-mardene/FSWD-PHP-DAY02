<?php
echo ("<html><body>");
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
// Escape user inputs for security
$second_column = mysqli_real_escape_string($conn, $_POST['secondColumn']);
$third_column = mysqli_real_escape_string($conn, $_POST['thirdColumn']);
$fourth_column = mysqli_real_escape_string($conn, $_POST['fourthColumn']);
$sql = "INSERT INTO my_first_table (second_column, third_column, fourth_column) VALUES ('$second_column', '$third_column', '$fourth_column')";
if (mysqli_query($conn, $sql)) {
   echo "<h1>New record created.<h1>";
} else {
   echo "<h1>Record creation error for: </h1>" . 
         "<p>" . $sql . "</p>" . 
         mysqli_error($conn);
}
mysqli_close($conn);
echo "</body></html>";
?>