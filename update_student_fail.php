<!--Ï ÷ñçóôçò åñ÷åôáé åäù ïôáí å÷åé äùóåé ëáèïò óôïé÷åéá ãéá ôçí öïñìá ùóôå íá êáíåé update óôïí ðéíáêá student ïðïõ ìðïñåé
íá îáíáåôéìáóåé ôçí öïñìá-->
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
<title>University - E-Lesson platform/Update failed-Try again</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
		<h2>Student update</h2>
		<?php
		$con = mysql_connect("83.212.240.15","it20919","panos91")
             or die( 'Could not connect to DB: ' . mysql_error() );
	

		mysql_select_db("it20919", $con) or die (mysql_error());
	
		$result = mysql_query("SELECT * FROM student");
		
		echo "<table width='100%'><tr>";
		if (mysql_num_rows($result)>0)
		{
          $i = 0;
          while ($i < (mysql_num_fields($result)-1))
          {
		echo "<th>". mysql_field_name($result, $i) . "</th>";
		$i++;
		}
		echo "</tr>";
   
		while ($rows = mysql_fetch_array($result,MYSQL_ASSOC))
		{
		echo "<tr>";
      
		echo "<td align='center'>". $rows['id'] . "</td>";
		echo "<td align='center'>". $rows['password'] . "</td>";
		echo "<td align='center'>". $rows['name'] . "</td>";
		echo "<td align='center'>". $rows['surname'] . "</td>";
		echo "<td align='center'>". $rows['father'] . "</td>";
		echo "<td align='center'>". $rows['department'] . "</td>";
		echo "<td align='center'>". $rows['current_semester'] . "</td>";
		}
		}else{
		echo "<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>";
		}
		echo "</table>"; 
		echo $_SESSION['check'];
		mysql_close($con);
		?>
	
		<br />
		<br />
	
		<h2>Fill in the form below to update the database</h2><br />
	
		<table width="100%" border="0" cellpadding="3" cellspacing="1">
			<tr>
				<form action="check_student_update.php" method="post">
				<td>
				<td colspan="3"><strong> </strong></td>
			</tr>
			<tr>
				<td width="330">Give the ID of the student you want to update</td>
				<td width="6">:</td>
				<td width="294"><input type="text" name="id" /></td>
			</tr>
			<tr>
				<td>Give the column you want to change e.g name</td>
				<td>:</td>
				<td><input type="text" name="column" /></td>
			</tr>
			<tr>
				<td>Give the new name of the field you want to change</td>
				<td>:</td>
				<td><input type="text" name="new" /></td>
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
