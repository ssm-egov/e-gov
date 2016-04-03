<?php
$dbhost="localhost";
$dbusername = "umair";
$dbpassword = "ynwa96";
$dbname = "ssm_egov";
$connection = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_errno()){
die("connection failed: " 
. mysqli_connect_error() . 
" ( " . mysqli_connect_errno() . " ) "
);
}
?>
<html>
  <head> 
  <h1>SSM COLLEGE OF ENGINEERING AND TECHNOLOGY</h1>
      <h3><em>education par excellence</em></h3>
	  
	  <h2>EXAMINATION REGISTRATION FORM</h2>
	  <h2>(Admin)</h2>
	  <title>examination form</title>
	  

    <link rel="stylesheet" type="text/css" href="examstylesheet.css">
  </head>
   <body>
   <div>
   
   <form method="post">
	<table align="center" cellpadding = "20">
	
	<tr>
	<td>University Roll Number:</td>
	<td><input type="text" name="roll_no" />
	</td>
	</tr>

	<tr>
	<td>Registration Number:</td>
	<td><input type="text" name="registration_number"/>
	</td>
	</tr>

	<tr>
	<td>Name:</td>
	<td><input type="text" name="name">
	</td>
	</tr>


	<tr>
	<td>Subjects:</td>
	<td><textarea name="subjects"></textarea>
	</td>
	</tr>


	<tr>
	<td>Subject Code:</td>
	<td><textarea name="subject_code"></textarea>
	</td>
	</tr>


	<tr>
	<td>Fee submitted:</td>
	<td><input type="text" name="fee">
	</td>
	</tr>
	
	
	<tr>
	<td>Admit Card Issued:</td>
	<td><input type="text" name="admit_card">
	</td>
	</tr>
	
	
	<tr>
	<td>Registration:</td>
	<td><input type="text" name="registration">
	</td>
	</tr>
	
	
	<tr>
	<td>Result:</td>
	<td><input type="text" name="result">
	</td>
	</tr>
	
	<tr>
	<td>Backlogs:</td>
	<td><input type="text" name="backlogs">
	</td>
	</tr>
	

	
	<tr>
	<td colspan="2" align="center">
	<input type="submit" value="Submit" name="submit">
	<input type="reset" value="Reset" name="reset">
	</td>
	</tr>
	</table>
	</form>
	</div>

	<?php

		if (isset($_POST['submit'])) {
			
		$query = "INSERT INTO examination (university_roll, reg_no, name, subjects, 
	subject_code, fee_deposited, admit_card_issued, Registration,result, backlogs)
	VALUES ({$_POST['roll_no']}, '{$_POST['registration_number']}', '{$_POST['name']}', '{$_POST['subjects']}', '{$_POST['subject_code']}',
	 '{$_POST['fee']}','{$_POST['admit_card']}', '{$_POST['registration']}','{$_POST['result']}','{$_POST['backlogs']}')";

	$result = mysqli_query($connection, $query);

	    if(!$result) {
		    echo "<script>";
			echo "alert('There was some error');";
			echo "</script>";
	    } else {
		    echo "<script>";
			echo "alert('Data added successfully');";
			echo "</script>";
	  }
	}
	?>
	
	</body>
	</html>