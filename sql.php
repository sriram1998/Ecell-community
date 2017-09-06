
<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Create database
$sql = "CREATE DATABASE e_comm";
if ($conn->query($sql) === TRUE) {
   
} else {
   
}
$conn->close();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_comm";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table users
$sql = "CREATE TABLE users (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50) NOT NULL,
dob  varchar(20) NOT NULL,
gender varchar(20) NOT NULL,
rollNum varchar(20) NOT NULL,
email varchar(50) NOT NULL,
phoneNum varchar(50) NOT NULL,
dept varchar(10) NOT NULL,
q1 INT(11) NOT NULL,
q2 INT(11) NOT NULL,
q3 INT(11) NOT NULL,
q4 INT(11) NOT NULL,
q5 INT(11) NOT NULL,
q6 INT(11) NOT NULL,
q7 INT(11) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
   
} else {
  
}
mysqli_close($conn);
?>
