<!--Εδω ερχεται ο χρηστης αφου εχει κανει το log in ως φοιτητης και του δινεται η δυνατοτητα να κανει τις 2 λειτουργιες
να δει τα μαθηματα που εχει δηλωσει και να κανει καινουργια δηλωσει-->
<?php
session_start();
$final_user=$_SESSION['user'];
$final_pass=$_SESSION['pass'];
$show_fullname=$_SESSION['fullname'];

if(!session_is_registered(myusername)){
header("location:main_login.php");

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
		<p align="right">User: <b> <?php echo $show_fullname; ?></b></p>      
		<h2>Logged in</h2>
		<h3></h3>
		<br />
		<br />
		<br />
		<p align="center"><a href="http://www.dit.hua.gr/~it20944/lesson_list.php"> <img src="images/mylessons.jpeg" width="300" height="190" /> </a>
		</p>
        <br />
		<p align="center"><a href="http://www.dit.hua.gr/~it20944/lesson_statement.php"> <img src="images/statement.jpeg" width="300" height="190" /> </a>
		</p>
      
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
