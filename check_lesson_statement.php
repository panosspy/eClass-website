<!--Εκτελουμε την εντολη insert στον πινακα lesson_statement και αναλογος στελνουμε τον χρηστη σε αντιστοιχες σελιδες
αναλογα με το αποτελεσμα του insert-->
<?php
session_start();
$search_user=$_SESSION['user'];
//$show_fullname=$_SESSION['fullname'];
if(!session_is_registered(myusername)){
header("location:main_login.php");

}
?>
<html>
<head>
<title>Update check</title>
</head> 
<body>
	<?php
		$connn = mysql_connect("83.212.240.15","it20919","panos91") or die( 'Could not connect to DB: ' . mysql_error() );
		mysql_select_db("it20919", $connn) or die (mysql_error());
		//Η μεταβλιτη αυτη ειναι απο την φορμα της προηγουμενης σελιδας  
		$code=$_POST['code'];
		
		$query2 = mysql_query("insert into lesson_statement values('$search_user','$code')");
			
		if($query2==1){
		header("location:lesson_statement_success.php");
		}
		else {
		header("location:lesson_statement_fail.php");
		}
	?>
</body>
</html>
