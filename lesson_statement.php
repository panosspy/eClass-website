<!--Σε αυτη τη σελιδα ο χρηστης βλεπει μαθηματα που μπορει να δηλωσει και τα μαθηματα που εχει δηλωσει ιδη και μεσω μιας φορμας
μπορει να δηλωσει και αλλο μαθημα-->
<?php
session_start();
$search_user=$_SESSION['user'];
$show_fullname=$_SESSION['fullname'];
if(!session_is_registered(myusername)){
header("location:main_login.php");

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>University - E-Lesson platform/Course registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<h2>Lesson Statement</h2>
		<?php
		$con = mysql_connect("83.212.240.15","it20919","panos91")
             or die( 'Could not connect to DB: ' . mysql_error() );
	
		mysql_select_db("it20919", $con) or die (mysql_error());
	
		$proresult = mysql_query("select current_semester from student where id='$_SESSION[user]'");
		while($prorow = mysql_fetch_array($proresult)) 
		{
		$_POST['student_semester']= $prorow['current_semester'] ;
		}
		?>
	
		<h3>All Lessons for this semester (<?php echo $_POST[student_semester]; ?>) </h3>
		<?php	
		$result2 = mysql_query("select code,title,professor,semester from lesson where semester='$_POST[student_semester]' order by code");
	
		echo "<table width='100%'><tr>";
		if (mysql_num_rows($result2)>0)
		{
          $j = 0;
          while ($j < (mysql_num_fields($result2)))
          {
		echo "<th>". mysql_field_name($result2, $j) . "</th>";
		$j++;
		}
		echo "</tr>";
   
		while ($rows2 = mysql_fetch_array($result2,MYSQL_ASSOC))
		{
		echo "<tr>";
      
		echo "<td align='center'>". $rows2['code'] . "</td>";
		echo "<td align='center'>". $rows2['title'] . "</td>";
		echo "<td align='center'>". $rows2['professor'] . "</td>";
		echo "<td align='center'>". $rows2['semester'] . "</td>";
		}
		}else{
		echo "<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>";
		}
		echo "</table>"; 
		echo $_SESSION['check'];
		?>

		<h3>My Lessons for this semester (<?php echo $_POST[student_semester]; ?>) </h3>
		<?php
		$result = mysql_query("select code,title,professor,semester from lesson_statement join lesson on lesson_code=code join student on student_id=id where id='$_SESSION[user]'and semester='$_POST[student_semester]' order by code");
	
		echo "<table width='100%'><tr>";
		if (mysql_num_rows($result)>0)
		{
          $i = 0;
          while ($i < (mysql_num_fields($result)))
          {
		echo "<th>". mysql_field_name($result, $i) . "</th>";
		$i++;
		}
		echo "</tr>";
   
		while ($rows = mysql_fetch_array($result,MYSQL_ASSOC))
		{
		echo "<tr>";
		
		echo "<td align='center'>". $rows['code'] . "</td>";
		echo "<td align='center'>". $rows['title'] . "</td>";
		echo "<td align='center'>". $rows['professor'] . "</td>";
		echo "<td align='center'>". $rows['semester'] . "</td>";
		}
		}else{
		echo "<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>";
		}
		echo "</table>"; 
		echo $_SESSION['check'];
		mysql_close($con);
		?>
	
		<br />
	
		<h2>Fill in the form below to a lesson i your calendar</h2><br />
	
		<table width="100%" border="0" cellpadding="3" cellspacing="1">
			<tr>
				<form action="check_lesson_statement.php" method="post">
				<td>
				<td colspan="3"><strong> </strong></td>
			</tr>
			<tr>
				<td width="330">Give Code of the lesson you want add in your system</td>
				<td width="6">:</td>
			<td width="294"><input type="code" name="code" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Add"><input type="reset" name="reset" value="Clear"></td>
			</tr>
			</td>
			</form>
		</table>		

		<br />

		<form><input type="button" value="Back To Main Menu" onClick="window.location.href='http://www.dit.hua.gr/~it20944/login_success.php'"></form>
	
      
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
