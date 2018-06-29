<!--Σε αυτη τη σελιδα ερχεται ο χρηστης οταν εχει στειλει μηνυμα προς τους κατασκευαστες του site σωστα-->
<?php
session_start();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>University - E-Lesson platform/Send contant form</title>
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
		<h2>Your message has been sent successfully!</h2>
		<h3></h3>
     
		<?php

		$send_contact=mail('it20919@hua.gr',"$_POST[subject]","$_POST[detail]","from:"."$_POST[name]"." <$mail_from>");

		if($send_contact){
		echo "We've recived your contact information and we will answer to you as soon as possible";
		}
		else {
		echo "ERROR";
		}
		?>	

		<br />
      
		<img src="images/thank.jpeg" align="center" width="480" height="250" />	

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
    <div class="padding"> Copyright &copy;University 2012  | Design: Boumpoukiotis & Spyropoulos co. | <a href="http://www.dit.hua.gr/~it20944/contact.php">Contact</a> |  | <a href="http://www.dit.hua.gr/~it20944/login.php">Login</a> </div>
  </div>
</div>
</body>
</html>
