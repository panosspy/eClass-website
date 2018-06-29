<!--Σε αυτη τη σελιδα εκτελουμε την εντολη update στη βαση μας και ελενχουμε εαν εγινε και στελνουμε σε αντιστοιχες σελιδες
αναλογα με το αποτελεσμα-->
<html>
<head>
<!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8" > -->
<title>Update check</title>
</head> 
<body>
<?php
	$con = mysql_connect("83.212.240.15","it20919","panos91") or die( 'Could not connect to DB: ' . mysql_error() );
		mysql_select_db("it20919", $con) or die (mysql_error());

	//Οι μεταβλιτες αυτες ειναι απο την φορμα τις προηγουμενης σελιδας
	$id=$_POST['id'];
	$column=$_POST['column'];
	$new=$_POST['new'];


	$query = "UPDATE student SET  $column = '$new' WHERE Id='$id'";
	
	
	$end = mysql_query($query);

	if($end==1){
	header("location:update_student_success.php");
	}
	else {
	header("location:update_student_fail.php");
	}
?>
</body>
</html>
