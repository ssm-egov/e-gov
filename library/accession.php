<?php 
$dbhost="localhost";
$dbusername = "umair";
$dbpassword = "ynwa96";
$dbname = "ssm_egov";
$connection = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_errno()){
die("connection failed: " 
. mysqli_connect_error() . 
" ( " . mysqli_connect_errno() . " ) ");

}
 if (isset($_POST['submit'])) {
 	  $query = " INSERT INTO accession (date, acc_no, author, title, cost, place_publisher, pages, volume, sources, bill_no, class_no, book_no, record_id, total_books, remarks) VALUES ('{$_POST['date']}', '{$_POST['acc_no']}', '{$_POST['author']}', '{$_POST['title']}', {$_POST['cost']}, '{$_POST['place_publisher']}', {$_POST['pages']}, {$_POST['volume']}, '{$_POST['sources']}', '{$_POST['bill_no']}', '{$_POST['class_no']}', '{$_POST['book_no']}', '{$_POST['record_id']}', {$_POST['total_books']}, '{$_POST['remarks']}')";
 	
 	$result = mysqli_query($connection, $query);

      if(!$result) {
        echo "<script> alert('There was some error'); </script>";
      } else {
        echo "<script> alert('Data added successfully'); </script>";
    }
 }

?>
<html>
<link rel= "StyleSheet" href="acc-stylesheet.css">
<head>
<title>Accession</title>
</head>
<body>
	<div id="top">
		<b>Accession Register</b>
	</div>
	<form method="POST">
      <div class="page" id="new"><b><a href=>New</a></div>
      <div class="page" id="edit"><b><a href=>Edit</a></div>
      <div class="page" id="delete"><b><a href=>Delete</a></div>
      <div class="page" id="prev"><b><a href=>Prev</a></div>
      <div class="page" id="next"><b><a href=>Next</a></div>
      <div class="page" id="last"><b><a href=>Last</a></div>
      <div class="page" id="close"><b><a href=>Close</a></div>
    
<div id="tab1">
	 <table>
	 	<tr width="70" height="60">
	 		<td>Date:</td>
	 		<td><input type ="text" name="date" style="width:200px";></td>
	 	</tr>
	 	<tr width="70" height="60">
	 		<td>Accession No:</td>
	 		<td><input type ="text" name="acc_no" style="width:200px";></td>
	 	</tr>		
        <tr width="70" height="60">
	 		<td>Authors Name:</td>
	 		<td><input type ="text" name="author" style="width:200px";></td>
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
	 		<td><input type ="text" name="place_publisher" style="width:200px";></td>
	 	</tr>	

	 	</table>
</div>

	<div id="tab3">
	 <table>	
		 <tr  width="70" height="60">
	 		<td>Pages:</td>
	 		<td><input type ="text" name="pages" style="width:200px";></td>
	 	 </tr>		
         <tr  width="70" height="60">
	 		<td>Volume:</td>
	 		<td><input type ="text" name="volume" style="width:200px";></td>
	 	 </tr>		
         <tr  width="70" height="60">
	 		<td>Sources:</td>
	 		<td><input type ="text" name="sources" style="width:200px";></td>
	 	 </tr>		
         <tr  width="70" height="60">
	 		<td>Bill No:</td>
	 		<td><input type ="text" name="bill_no" style="width:200px";></td>
	 	 </tr>		
         <tr  width="70" height="60">
	 		<td>Class No:</td>
	 		<td><input type ="text" name="class_no" style="width:200px";></td>
	 	 </tr>		
         <tr  width="70" height="60">
	 		<td>BooK No:</td>
	 		<td><input type ="text" name="book_no" style="width:200px";></td>
	 	 </tr>		
        
	  </table>	
	
	</div>
    <div id="remarks">
	 		Remarks:<input type ="text" name="remarks" style="height:200px";>
	</div>
	<div id="tab2">
	  <table>
	    <tr  width="70" height="60">
	 		<td>Record Id:</td>
	 		<td><input type ="text" name="record_id"  style="width:200px";/></td>
	 	</tr>	
	 	<tr  width="70" height="60">
	 		<td>Total Books:</td>
	 		<td><input type ="text" name="total_books"  style="width:200px";></td>
	 	</tr>	
	  </table>
    </div>
	 <div>
	    <button name="submit">Submit</button> 
     </div>
    </form>
	<div></div>	
</body>
</html>