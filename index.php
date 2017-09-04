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
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-6">
                              <input type = "range" name = "q1" id = "q1" min = "1" max = "10" onchange = "change(this)"/>
                        </div>
                        <div class="col-xs-6">
                              <p id = "p_q1">5</p>
                        </div>
                  </div>
            
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q2">On a scale of 1-10, how much do you know about start-ups?</label>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-6">
                              <input type = "range" name = "q2" id = "q2" min = "1" max = "10" onchange = "change(this)"/>
                        </div>
                        <div class="col-xs-6">
                              <p id = "p_q2">5</p>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q3">On a scale of 1-10, how much do you know aboutbusiness models?    </label>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-6">
                              <input type = "range" name = "q3" id = "q3" min = "1" max = "10" onchange = "change(this)"/>
                        </div>
                        <div class="col-xs-6">
                              <p id = "p_q3">5</p>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q4">On a scale of 1-10, how much do you know about investments related to start-ups? </label>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-6">
                              <input type = "range" name = "q4" id = "q4" min = "1" max = "10" onchange = "change(this)"/>
                        </div>
                        <div class="col-xs-6">
                              <p id = "p_q4">5</p>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q5">On a scale of 1-10, rate your knowledge on the various resources provided by our college for starting up?</label>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-6">
                              <input type = "range" name = "q5" id = "q5" min = "1" max = "10" onchange = "change(this)"/>
                        </div>
                        <div class="col-xs-6">
                              <p id = "p_q5">5</p>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q6">On a scale of 1-10, how likely are you to startupin college?      </label>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-6">
                              <input type = "range" name = "q6" id = "q6" min = "1" max = "10" onchange = "change(this)"/>
                        </div>
                        <div class="col-xs-6">
                              <p id = "p_q6">5</p>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-12">
                              <label for = "q7">On a scale of 1-10, how likely are you to start-up in life?
                              </label>
                        </div>
                  </div>
                  <div class = "row">
                        <div class="col-xs-6">
                              <input type = "range" name = "q7" id = "q7" min = "1" max = "10" onchange = "change(this)"/>
                        </div>
                        <div class="col-xs-6">
                              <p id = "p_q7">5</p>
                        </div>
                  </div>
                  <input type="submit" value="Register" class = "btn btn-block submitBtn" id="submit">
      </form>
      </div>
  </div>
  <script>
        $('#submit').click(function(e){

        e.preventDefault();
        
        // var name = $('#name').val();
        // var dob=$('#dob').val();
        // var gender=$('input:radio[name=gender]:checked').val();
        // var rollNum=$('#rollNum').val();
        // var email=$('#email').val();
        // var phoneNum=$('#phoneNum').val();
        // var dept=$('#dept').val();
        // var q1=$('input:range[name=q1]')
        var data = $('form').serializeArray();
        console.log(data);
        if (name != ''){
        $.ajax({
            type: "POST",
            url: "register.php",
            data: {name: data[0].value,dob:data[1].value,gender:data[2].value,rollNum:data[3].value,email:data[4].value,phoneNum:data[5].value,dept:data[6].value,q1:data[7].value,q2:data[8].value,q3:data[9].value,q4:data[10].value,q5:data[11].value,q6:data[12].value,q7:data[13].value},
            success: function(data){

            $('#response').html(data);
                                    },
             fail: function(data){
            $('#response').html('There is an error!');
                                    }
                    });
                }
            });


      function change(buttonControl) {
            var arr = buttonControl.name;
            var id = "p_q" + arr.substr(1, 4);
            document.getElementById(id).innerHTML = buttonControl.value;
      }
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
