<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{$name = mysql_real_escape_string($_POST['name']);
 $dob=$_POST['dob'];
 $gender=$_POST['gender'];
 $rollNum=$_POST['rollNum'];
 $email=$_POST['email'];
 $phoneNum=$_POST['phoneNum'];
 $dept=$_POST['dept'];
 $a1=$_POST['q1'];
 $a2=$_POST['q2'];
 $a3=$_POST['q3'];
 $a4=$_POST['q4'];
 $a5=$_POST['q5'];
 $a6=$_POST['q6'];
 $a7=$_POST['q7'];
 $conn = mysql_connect("localhost", "root","") or die(mysql_error());
mysql_select_db($conn, "e_comm") or die("Cannot connect to database");
$query = $conn->prepare("INSERT INTO users (name,dob,gender,rollNum,email,phoneNum,dept,q1,q2,q3,q4,q5,q6,q7) 
	        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$query->bind_param("sssssssiiiiiii", $name,$dob,$gender,$rollNum,$email,$phoneNum,$dept,$a1,$a2,$a3,$a4,$a5,$a6,$a7);
$query->execute();
Print "Succesfully Registered";
Print '<script>window.location.assign("index.php");</script>';
}
?>
