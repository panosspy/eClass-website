<!--Εδω ο χρηστης ερχεται αφου εχει κανει σωστα το log in ως γραμματεια και του δινεται η δυνατοτητα μεσω μιας επιλογης να βαλει
καινουργιους φοιτητες στη βαση και καινουργια μαθηματα οπως και να κανει update και στους 2 πινακες οπως και να δει ποσοι φοιτητες ειναι
γραμμενοι σε καθε μαθημα-->
<?php
session_start();
$final_user=$_SESSION['user'];
$final_pass=$_SESSION['pass'];
$show_fullname=$_SESSION['fullname'];

if(!session_is_registered(myusername)){
header("location:main_login2.php");

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>University - E-Lesson platform/Logged in</title>
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
		<h2>Logged in</h2>
		<h3></h3>
		<p>You are logged in as<b> <?php echo $show_fullname; ?></b></p>
		<br />
		<br />
		<table class="group-header">
			<tr>
				<td width="130"><p style="text-align:center;font-size:12px;" ><b><u> Lesson Management </u></b><br /></p></td>
				<td width="85"> </td>
				<td width="130"><p style="text-align:center;font-size:12px;" ><b><u> Student Management </u></b><br /></p></td>
			</tr>	
			<tr>
				<td class="group-lesson_buttons"><form><input type="button" style="height: 40px; width: 130px" value="Add New Lesson" onClick="window.location.href='http://www.dit.hua.gr/~it20944/lessonform.php'"></form> 
				</td>
				<td width="85"></td>
				<td class="group-student_buttons"><form><input type="button" style="height: 40px; width: 130px" value="Add New Student" onClick="window.location.href='http://www.dit.hua.gr/~it20944/studentform.php'"></form> 
				</td>
			</tr>	
			<tr>
				<td class="group-lesson_buttons"><form><input type="button" style="height: 40px; width: 130px" value="Lesson Update" onClick="window.location.href='http://www.dit.hua.gr/~it20944/updatelesson.php'"></form> 
				</td>
				<td width="85"></td>
				<td class="group-student_buttons"><form><input type="button" style="height: 40px; width: 130px" value="Student Update" onClick="window.location.href='http://www.dit.hua.gr/~it2094/updatestudent.php'"></form> 
				</td>
			</tr>
			<tr>
				<td class="group-lesson_buttons"> 
				</td>
				<td width="85"></td>
				<td class="group-student_buttons"><form><input type="button" style="height: 40px; width: 130px" value="Student/Lesson" onClick="window.location.href='http://www.dit.hua.gr/~it20944/students_per_lesson.php'"></form> 
				</td>
			</tr>
		</table>
 
	
      <br />
      
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
