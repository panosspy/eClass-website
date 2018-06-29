<!--Εδω ο χρηστης μπορει να δει ποσοι φοιτητες ειναι γραμμενοι στα μαθηματα-->
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
<title>University - E-Lesson platform/Students per semester</title>
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
        <h2>Students per Lesson</h2>
		<?php
		$con = mysql_connect("83.212.240.15","it20919","panos91")
             or die( 'Could not connect to DB: ' . mysql_error() );

		mysql_select_db("it20919", $con) or die (mysql_error());
	
		$result = mysql_query("SELECT lesson_code,title,count(*) students FROM `lesson_statement` join lesson on lesson_code=code \n"
		. "group by lesson_code ");
	
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
      
		echo "<td align='center'>". $rows['lesson_code'] . "</td>";
		echo "<td align='center'>". $rows['title'] . "</td>";
		echo "<td align='center'>". $rows['students'] . "</td>";
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
		<br />
		<br />
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
