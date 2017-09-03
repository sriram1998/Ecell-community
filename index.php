<!doctype html>
<html>
  <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <title>Ecell community</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
      <link rel = "stylesheet" type="text/css" href="form.css">
      <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
  <style>
h1{
  position: absolute;
  margin-top: -5%;
  margin-left: 13%;
}
  </style>

  <body>
  <div class = "container-fluid">
      
      <div class = "center" id="response">

            <form id="myForm" class = "ecellSignup" method = "post">
            <h1>E-CELL REGISTRATION</h1>

                  <div class = "row">
                        <div class="col-xs-12">
                              <label for="name">NAME:</label>
                              <input type="text" id="name" name="name" placeholder="Your name:" class = "ecellInput" required>
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for="dob">DATE OF BIRTH</label>
                              <input type="date" name="dob" min="1979-12-31" id="dob"  class = "ecellInput" required>
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for="gender">GENDER:</label>
                              <div class = "row">
                                    <div class = "col-xs-4">
                                          <b>Male</b><i class="fa fa-mars" aria-hidden="true"></i>
                                                <input type="radio" id="male" name="gender" value="   male" required>
                                    </div>
                                    <div class = "col-xs-4">
                                          <b>Female</b><i class="fa fa-venus" aria-hidden="true"></i>
                                          <input type="radio" id="female" name="gender" value="female" required>
                                    </div>
                                    <div class = "col-xs-4">
                                          <b>Other</b><i class="fa fa-transgender-alt" aria-hidden="true"></i>
                                          <input type="radio" id="other" name="gender" value="other" required>
                                    </div>
                              </div>
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for="roll number">ROLL NUMBER:</label>
                              <input type="text" id="rollNum" name="rollNum"  class = "ecellInput" required>
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for="email">EMAIL:</label>
                              <input type="email" id="email" placeholder="Email"  class = "ecellInput" name = "email" required>
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for="phoneNum">Phone number:</label>
                              <input type="text" id="phoneNum" name="phoneNum"  class = "ecellInput" required>
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for="dept">DEPARTMENT:</label>
                              <select name="dept" placeholder="department" id="dept" required>
                                    <option value="CSE">CSE</option>
                                    <option value="ECE">ECE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="MECH">MECH</option>
                                    <option value="ICE">ICE</option>
                                    <option value="CIVIL">CIVIL</option>
                                    <option value="CHEM">CHEM</option>
                                    <option value="PROD">PROD</option>
                                    <option value="META">META</option>
                                    <option value="DOMS">DOMS</option>
                                    <option value="OTHER">OTHER</option>      
                              </select> 
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q1">On a scale of 1-10, how much do you read about entrepreneurship?</label>
                              <div name = "q1">
                                    1<input type = "radio" name = "q1" id = "q1_1"    value = "1" required>
                                    2<input type = "radio" name = "q1" id = "q1_2"    value = "2" required>
                                    3<input type = "radio" name = "q1" id = "q1_3"    value = "3" required>
                                    4<input type = "radio" name = "q1" id = "q1_4"    value = "4" required>
                                    5<input type = "radio" name = "q1" id = "q1_5"    value = "5" required>
                                    6<input type = "radio" name = "q1" id = "q1_6"    value = "6" required>
                                    7<input type = "radio" name = "q1" id = "q1_7"    value = "7" required>
                                    8<input type = "radio" name = "q1" id = "q1_8"    value = "8" required>
                                    9<input type = "radio" name = "q1" id = "q1_9"    value = "9" required>
                                    10<input type = "radio" name = "q1" id = "q1_10"  value = "10" required>
                              </div>  
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q2">On a scale of 1-10, how much do you know about start-ups?</label>
                              <div name = "q2">
                                    1<input type = "radio" name = "q2" id = "q2_1" value = "1"  required>
                                    2<input type = "radio" name = "q2" id = "q2_2" value  = "2" required>
                                    3<input type = "radio" name = "q2" id = "q2_3" value  = "3" required>
                                    4<input type = "radio" name = "q2" id = "q2_4" value  = "4" required>
                                    5<input type = "radio" name = "q2" id = "q2_5" value  = "5" required>
                                    6<input type = "radio" name = "q2" id = "q2_6" value  = "6" required>
                                    7<input type = "radio" name = "q2" id = "q2_7" value  = "7" required>
                                    8<input type = "radio" name = "q2" id = "q2_8" value  = "8" required>
                                    9<input type = "radio" name = "q2" id = "q2_9" value  = "9" required>
                                    10<input type = "radio" name = "q2" id = "q2_10" value = "10" required>
                              </div>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q3">On a scale of 1-10, how much do you know aboutbusiness models?    </label>
                              <div name = "q3">
                                    1<input type = "radio" name = "q3" id = "q3_1" value  = "1" required>
                                    2<input type = "radio" name = "q3" id = "q3_2" value  = "2" required>
                                    3<input type = "radio" name = "q3" id = "q3_3" value  = "3" required>
                                    4<input type = "radio" name = "q3" id = "q3_4" value  = "4" required>
                                    5<input type = "radio" name = "q3" id = "q3_5" value  = "5" required>
                                    6<input type = "radio" name = "q3" id = "q3_6" value  = "6" required>
                                    7<input type = "radio" name = "q3" id = "q3_7" value  = "7" required>
                                    8<input type = "radio" name = "q3" id = "q3_8" value  = "8" required>
                                    9<input type = "radio" name = "q3" id = "q3_9" value  = "9" required>
                                    10<input type = "radio" name = "q3" id = "q3_10" value = "10" required>
                              </div>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q4">On a scale of 1-10, how much do you know about investments related to start-ups? </label>
                              <div name = "q4">
                                    1<input type = "radio" name = "q4" id = "q4_1" value = "1" required>
                                    2<input type = "radio" name = "q4" id = "q4_2" value = "2" required>
                                    3<input type = "radio" name = "q4" id = "q4_3" value = "3" required>
                                    4<input type = "radio" name = "q4" id = "q4_4" value = "4" required>
                                    5<input type = "radio" name = "q4" id = "q4_5" value = "5" required>
                                    6<input type = "radio" name = "q4" id = "q4_6" value = "6" required>
                                    7<input type = "radio" name = "q4" id = "q4_7" value = "7" required>
                                    8<input type = "radio" name = "q4" id = "q4_8" value = "8" required>
                                    9<input type = "radio" name = "q4" id = "q4_9" value = "9" required>
                                    10<input type = "radio" name = "q4" id = "q4_10" value = "10" required>
                              </div>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q5">On a scale of 1-10, rate your knowledge on the various resources provided by our college for starting up?</label>
                              <div name = "q5">
                                    1<input type = "radio" name = "q5" id = "q5_1" value = "1" required>
                                    2<input type = "radio" name = "q5" id = "q5_2" value = "2" required>
                                    3<input type = "radio" name = "q5" id = "q5_3" value = "3" required>
                                    4<input type = "radio" name = "q5" id = "q5_4" value = "4" required>
                                    5<input type = "radio" name = "q5" id = "q5_5" value = "5" required>
                                    6<input type = "radio" name = "q5" id = "q5_6" value = "6" required>
                                    7<input type = "radio" name = "q5" id = "q5_7" value = "7" required>
                                    8<input type = "radio" name = "q5" id = "q5_8" value = "8" required>
                                    9<input type = "radio" name = "q5" id = "q5_9" value = "9" required>
                                    10<input type = "radio" name = "q5" id = "q5_10" value = "10" required>
                              </div>
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q6">On a scale of 1-10, how likely are you to startupin college?      </label>
                              <div name = "q6">
                                    1<input type = "radio" name = "q6" id = "q6_1" value = "1" required>
                                    2<input type = "radio" name = "q6" id = "q6_2" value = "2" required>
                                    3<input type = "radio" name = "q6" id = "q6_3" value = "3" required>
                                    4<input type = "radio" name = "q6" id = "q6_4" value = "4" required>
                                    5<input type = "radio" name = "q6" id = "q6_5" value = "5" required>
                                    6<input type = "radio" name = "q6" id = "q6_6" value = "6" required>
                                    7<input type = "radio" name = "q6" id = "q6_7" value = "7" required>
                                    8<input type = "radio" name = "q6" id = "q6_8" value = "8" required>
                                    9<input type = "radio" name = "q6" id = "q6_9" value = "9" required>
                                    10<input type = "radio" name = "q6" id = "q6_10" value = "10" required>
                              </div>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q7">On a scale of 1-10, how likely are you to start-up in life?
                              </label>
                              <div name = "q7">
                                    1<input type = "radio" name = "q7" id = "q7_1" value = "1" required>
                                    2<input type = "radio" name = "q7" id = "q7_2" value = "2" required>
                                    3<input type = "radio" name = "q7" id = "q7_3" value = "3" required>
                                    4<input type = "radio" name = "q7" id = "q7_4" value = "4" required>
                                    5<input type = "radio" name = "q7" id = "q7_5" value = "5" required>
                                    6<input type = "radio" name = "q7" id = "q7_6" value = "6" required>
                                    7<input type = "radio" name = "q7" id = "q7_7" value = "7" required>
                                    8<input type = "radio" name = "q7" id = "q7_8" value = "8" required>
                                    9<input type = "radio" name = "q7" id = "q7_9" value = "9" required>
                                    10<input type = "radio" name = "q7" id = "q7_10" value = "10" required>
                              </div>
                        </div>
                  </div>
                  
                  <input type="submit" value="Register" class = "btn btn-block submitBtn" id="submit">
      </form>
      </div>
  </div>
  <script>
        $('#submit').click(function(e){

        e.preventDefault();
        
        var name = $('#name').val();
        var dob=$('#dob').val();
        var gender=$('input:radio[name=gender]:checked').val();
        var rollNum=$('#rollNum').val();
        var email=$('#email').val();
        var phoneNum=$('#phoneNum').val();
        var dept=$('#dept').val();
        var q1=$('input:radio[name=q1]:checked').val();
        var q2=$('input:radio[name=q2]:checked').val();
        var q3=$('input:radio[name=q3]:checked').val();
        var q4=$('input:radio[name=q4]:checked').val();
        var q5=$('input:radio[name=q5]:checked').val();
        var q6=$('input:radio[name=q6]:checked').val();
        var q7=$('input:radio[name=q7]:checked').val();
        if (name != ''){
        $.ajax({
            type: "POST",
            url: "register.php",
            data: {name:name,dob:dob,gender:gender,rollNum:rollNum,email:email,phoneNum:phoneNum,dept:dept,q1:q1,q2:q2,q3:q3,q4:q4,q5:q5,q6:q6,q7:q7},
            success: function(data){

            $('#response').html(data);
                                    },
             fail: function(data){
            $('#response').html('There is an error!');
                                    }
                    });
                }
            });
  </script>
  </body>
  </html>
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
dob  DATE NOT NULL,
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
