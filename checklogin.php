<!--Ελενχουμε αν τα στοιχεια που εβαλε στην φορμα για το log in υπαρχουν στη βαση μας και εαν υπαρχουν κραταμε ολοκληρο
το ονομα και κανουμε register το id του και αναλογος στελνουμε σε αλλες σελιδες-->
<html>
<head>
<title></title>
</head> 
<body>
<?php
	session_start();

	$con = mysql_connect("83.212.240.15","it20919","panos91") or die("cannot connect");
	mysql_select_db("it20919", $con)or die("cannot select DB");

	$myusername=$_POST['myusername'];
	$mypassword=$_POST['mypassword'];
	$_SESSION['user']=$myusername;
	$_SESSION['pass']=$mypassword;

	$result2=mysql_query("SELECT name,surname FROM student WHERE id='$_POST[myusername]'and password='$_POST[mypassword]'");
	while($row = mysql_fetch_array($result2)) 
	{
	$print_fullname = $row['name'] . " " . $row['surname'] ;
	}
	$_SESSION['fullname']=$print_fullname;

	$result=mysql_query("SELECT * FROM student WHERE id='$_POST[myusername]'and password='$_POST[mypassword]'");

	$count=mysql_num_rows($result);


	if($count==1){
	session_register("myusername");
	session_register("mypassword");
	header("location:login_success.php");
	}
	else {
	header("location:main_loginf.php");
	}
?>
</body>
</html>
