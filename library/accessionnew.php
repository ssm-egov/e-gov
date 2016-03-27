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
<title>accession</title>
<link rel="styleSheet" type="text/css" href="accessionnewstylesheet.css">
</head>
<body>
<form method="post">
	<div id="top">
		<b>Accession Register For Books</b>
	</div>
      <div class="page"><b><a href="">New</a></div>
      <div class="page"><b><a href="">Edit</a></div>
      <div class="page"><b><a href="">Delete</a></div>
      <div class="page"><b><a href="">Prev</a></div>
    <div class="page"><b><a href="">Next</a></div>
    <div class="page"><b><a href="">Last</a></div>
    <div class="page"><b><a href="">Close</a></div>
	<div id="tab1">
	 <table> 
	 	<tr width="70" height="60">
	 		<td>Current Date:</td>
	 		<td><input type ="text" name="c_date" style="width:200px";></td>
	 	</tr>
		<tr width="70" height="60">
	 		<td>Procurement Date:</td>
	 		<td><input type ="text" name="p_date" style="width:200px";></td>
	 	</tr>
	 	<tr width="70" height="60">
	 		<td>Accession No:</td>
	 		<td><input type ="text" name="acc_no" style="width:200px";></td>
	 	</tr>		
        <tr width="70" height="60">
	 		<td>Authors Name:</td>
	 		<td><input type ="text" name="aut_name" style="width:200px";></td>
	 	</tr>		
        <tr width="70" height="60">
	 		<td>Title:</td>
	 		<td><input type ="text" name="title" style="width:200px";></td>
	 	</tr>
	 	<tr width="70" height="60">
	 		<td>Cost:</td>
	 		<td><input type ="text" name="cost" style="width:200px";></td>
	 	</tr>		
        <tr width="70" height="60">
	 		<td>Place/Publisher:</td>
	 		<td><input type ="text" name="p_pub" style="width:200px";></td>
	 	</tr>	

	 	</table></div>

	 	<div id="tab3">
	 	<table>	
		 <tr  width="70" height="60">
	 		<td>Pages:</td>
	 		<td><input type ="text" name="pages" style="width:200px";></td>
	 	</tr>		
         <tr  width="70" height="60">
	 		<td>Volume:</td>
	 		<td><input type ="text" name="vol" style="width:200px";></td>
	 	</tr>		
        <tr  width="70" height="60">
	 		<td>Sources:</td>
	 		<td><input type ="text" name="src" style="width:200px";></td>
	 	</tr>		
        <tr  width="70" height="60">
	 		<td>Bill No:</td>
	 		<td><input type ="text" name="b_no" style="width:200px";></td>
	 	</tr>		
         <tr  width="70" height="60">
	 		<td>Class No:</td>
	 		<td><input type ="text" name="c_no" style="width:200px";></td>
	 	</tr>		
         <tr  width="70" height="60">
	 		<td>BooK No:</td>
	 		<td><input type ="text" name="book_no" style="width:200px";></td>
	 	</tr>		
        
	 	</table>	
	
	</div>
	
	<div id="tab2">
		<table>
	    <tr  width="70" height="60">
	 		<td>Record Id:</td>
	 		<td><input type ="text" name="rec_id"  style="width:200px";/></td>
	 	</tr>	
	 	<tr  width="70" height="60">
	 		<td>Total Books:</td>
	 		<td><input type ="text" name="tot_books"  style="width:200px";></td>
	 	</tr>	
		<tr  width="70" height="60">
	 		<td>category:</td>
	 		<td><input type ="text" name="cat"  style="width:200px";></td>
	 	</tr>	
		<tr  width="70" height="60">
	 		<td>sub category:</td>
	 		<td><input type ="text" name="s_cat"  style="width:200px";></td>
			
	 	</tr>
		 <tr  width="70" height="60">
	 		<td>condition:</td>
	 		<td><input type ="text" name="cond"  style="width:200px";/></td>
	 	</tr>
		</div>
		<div>
		</table>
	</div>
	<div class="remarks">
	 		<label>Remarks:</label><input type ="text"  name="rem" height="0px";>
	</div>
	
	<div class="button">
	<input type="submit" name="submit" value="submit">
	</div>
	</form>
<?php
	if (isset($_POST['submit'])){
		$query = "INSERT INTO library_accession(c_date,procurement_date,accession_no,authors_name,title,cost,place_publisher,pages,volume,sources,bill_no,class_no,book_no,record_id,total_books,category,sub_category,condtn,remarks) 
	VALUES('{$_POST['c_date']}', '{$_POST['p_date']}', '{$_POST['acc_no']}','{$_POST['aut_name']}', '{$_POST['title']}',
	{$_POST['cost']},'{$_POST['p_pub']}',{$_POST['pages']}, {$_POST['vol']}, '{$_POST['src']}','{$_POST['b_no']}',
	'{$_POST['c_no']}',{$_POST['book_no']}, '{$_POST['rec_id']}', {$_POST['tot_books']}, '{$_POST['cat']}',
	'{$_POST['s_cat']}','{$_POST['cond']}','{$_POST['rem']}')";
	 
	$result = mysqli_query($connection, $query);
	    if($result){
		    echo "<script>";
		    echo "alert('Data added successfully');";
			echo "</script>";
	    } else {
		 echo "<script> alert('Error Adding Data'); </script>" ;
		 echo mysqli_error($connection);
	}
} else {
	echo "<script> alert('Error');</script> ";
}
?>
</body>	
</html>