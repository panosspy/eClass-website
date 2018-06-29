<!--Σε αυτη τη σελιδα ερχεται ο χρηστης οταν εχει δωσει λαθος στοιχεια  για το log in οπου μπορει να προσπαθησει ξανα να τα συμπληρωση-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>University - E-Lesson platform/Secretary Log in</title>
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
		<h2>Secretary Log in</h2>
		<h3></h3>
		<p>Fill username and password fields and press submit button to log in </p>
	


		<table width="100%" border="0" cellpadding="3" cellspacing="1">
			<tr>
				<form name="form1" method="post" action="checklogin2.php">
				<td>
				<td colspan="3"><strong> </strong></td>
			</tr>
			<tr>
				<td width="78">Username</td>
				<td width="6">:</td>
				<td width="294"><input name="myusername" type="text" id="myusername"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="mypassword" type="password" id="mypassword"></td>
				<td><h4 style="color:red;">Wrong username or password. Please try again!</h4></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="Submit" value="Login"><input type="reset" name="Reset" value="Clear"></td>
			</tr>
			</td>
			</form>
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
          <li><a href="http://www.dit.hua.gr/~it20944/login.php">Login</a></li>
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
    <div class="padding"> Copyright &copy;University 2012  | Design: Boumpoukiotis & Spyropoulos co. | <a href="http://www.dit.hua.gr/~it20944/contact.php">Contact</a> | | <a href="http://www.dit.hua.gr/~it20944/login.php">Login</a> </div>
  </div>
</div>
</body>
</html>
