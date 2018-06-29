<!--Ο χρηστης ερχεται σε αυτη τη σελιδα οταν εχει συμπληρωση λαθος την φρομα για να εισαγει καινουργιο μαθημα στη βαση οπου του δινεται
νεα προσπαθεια για την εισαγωγη μαθηματος λεγοντας του οτι εχει κανει καποιο λαθος στα στοιχεια που συμπληρωσε προηγουμενος-->
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
<title>University - E-Lesson platform/Lesson form</title>
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
		<h2>Add Lesson</h2>
		<p>Fill in the form below to add a lesson in database</p>
	
		<?php
		if (!isset($_POST['submit'])){
		?>
	
		<table width="100%" border="0" cellpadding="3" cellspacing="1">
			<tr>
				<form name="form2" action="lessonform.php" method="post">
				<td>
				<td colspan="3"><strong> </strong></td>
			</tr>
			<tr>
				<td width="78">Code</td>
				<td width="6">:</td>
				<td width="294"><input name="code" type="text" id="mycode"></td>
			</tr>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><input name="title" type="text" id="mytitle"></td>
			</tr>
			<tr>
				<td>Professor</td>
				<td>:</td>
				<td><input name="professor" type="text" id="myprofessor"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td>:</td>
				<td><input name="semester" type="text" id="mysemester"></td>
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
		<form><input type="button" value="Back To Main Menu" onClick="window.location.href='http://www.dit.hua.gr/~it20944/login_success2.php'"></form>
		<?php
		}
		else
		{
		if((!empty($_POST['code']))&& (!empty($_POST['title']))&& (!empty($_POST['professor']))&& (!empty($_POST['semester']))) {

		$conn = mysql_connect("83.212.240.15","it20919","panos91") or die( 'Could not connect to DB: ' . mysql_error() );
		mysql_select_db("it20919", $conn) or die(mysql_error());
		$query=mysql_query("INSERT INTO lesson VALUES ('$_POST[code]', '$_POST[title]', '$_POST[professor]', '$_POST[semester]', 'it_sec' )") or die(mysql_error());
	
		mysql_close($conn);
		if($query){
		header("location:send_form_success.php");}
		else{
		header("location:send_lessonform_fail.php");
		}
		}
		}
		?>
	
		<br />
		You have made a wrong in filling the fields above!!!
      
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
