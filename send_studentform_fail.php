<!--Ο χρηστης ερχεται σε αυτη τη σελιδα οταν εχει συμπληρωση λαθος την φρομα για να εισαγει καινουργιο φοιτητη στη βαση οπου του δινεται
νεα προσπαθεια για την εισαγωγη φοιτητη λεγοντας του οτι εχει κανει καποιο λαθος στα στοιχεια που συμπληρωσε προηγουμενος-->
<?php
session_start();
$show_fullname=$_SESSION['fullname'];

if(!session_is_registered(myusername)){
header("location:main_login2.php");

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>University - E-Lesson platform/Student Form</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css" media="all">
@import "images/style.css";
</style>
</head>
<body>
<div class="content">
  <div id="header">
    <div class="title">
      <h1><a style="color: #85621E" href="http://www.dit.hua.gr/~it20944/index.php/" style="text-decoration:none">E-Lesson</a></h1>
    </div>
  </div>
  <div id="main">
    <div class="center">
		<p align="right">User: <b> <?php echo $show_fullname; ?></b></p>
		<h2>Add Student</h2>
		<p>Fill in the form below to add a student in database</p>

		<?php
		if (!isset($_POST['submit'])){
		?>

		<table width="100%" border="0" cellpadding="3" cellspacing="1">
			<tr>
				<form action="studentform.php" method="post">
				<td>
				<td colspan="3"><strong> </strong></td>
			</tr>
			<tr>
				<td width="78">Id</td>
				<td width="6">:</td>
				<td width="294"><input type="text" name="id" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="pass" /></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="firstname" /></td>
			</tr>
			<tr>
				<td>Surname</td>
				<td>:</td>
				<td><input type="text" name="surname" /></td>
			</tr>
			<tr>
				<td>Fathername</td>
				<td>:</td>
				<td><input type="text" name="fname" /></td>
			</tr>
			<tr>
				<td>Department</td>
				<td>:</td>
				<td><input type="text" name="department" /></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td>:</td>
				<td><input type="text" name="semester" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="submit"><input type="reset" name="reset" value="Clear"></td>
			</tr>
			</td>
			</form>
		</table>

		<br />
		<?php
		}
		else
		{
		if((!empty($_POST['id']))&& (!empty($_POST['pass']))&& (!empty($_POST['firstname']))&& (!empty($_POST['surname'])) && (!empty($_POST['fname'])) && (!empty($_POST['department'])) && (!empty($_POST['semester']))) {

		$con = mysql_connect("83.212.240.15","it20919","panos91")
             or die( 'Could not connect to DB: ' . mysql_error() );
	

		mysql_select_db("it20919", $con) or die (mysql_error());
		$query=mysql_query("INSERT INTO student VALUES ('$_POST[id]', '$_POST[pass]', '$_POST[firstname]', '$_POST[surname]', '$_POST[fname]', '$_POST[department]', '$_POST[semester]', 'it_sec')") or die(mysql_error());
	
	
		mysql_close($con);
	

		if($query){
		header("location:send_form_success.php");}
		}
		else{("location:send_studentform_fail.php");}
		}
		?>
	
		<br />
		You have made a wrong in filling the fields above!!!
        <br/>
		<form><input type="button" value="Back To Main Menu" onClick="window.location.href='http://www.dit.hua.gr/~it20944/login_success2.php'"></form>
    
	</div>
    <div class="leftmenu">
		<?php
		echo date("D d F Y");
		?>
      <div class="nav">
        <ul>
          <li><a href="http://www.dit.hua.gr/~it20944/index.php">Home</a></li>
          <li><a href="http://www.dit.hua.gr/~it20944/logout.php">Logout</a></li>
          <li><a href="http://www.dit.hua.gr/~it20944/about.php">About</a></li>
          <li><a href="http://www.dit.hua.gr/~it20944/contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
 <div id="prefooter">
    <div class="particles">
    </div>
    <div class="comments">
    </div>
  </div>
  <div id="footer">
    <div class="padding"> Copyright &copy;University 2012  | Design: Boumpoukiotis & Spyropoulos co. | <a href="http://www.dit.hua.gr/~it20944/contact.php">Contact</a> | | <a href="http://www.dit.hua.gr/~it20944/logout.php">Logout</a> </div>
  </div>
</div>
</body>
</html>
