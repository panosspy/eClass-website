<!--Σε αυτη τη σελιδα μπορεις να στειλεις μεσο μιας φορμας ενα μηνυμα προς τους κατασκεβαστες του site-->
<?php
//Κλεινουμε το session ωστε να χριεαζετε να ξανακανεις το log in για να γυρισεις πισω 
session_start();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>University - E-Lesson platform/Contact</title>
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
      <h2>Contact</h2>
      <h3></h3>
      <p>Please fill all the fields and press submit button to send your message to <a style="color: #85621E" href="http://www.dit.hua.gr/~it20944/about.php/" style="text-decoration:none">E-Lesson Group</a> </p>
	
		<table width="400" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td><strong></strong></td>
</tr>
</table>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="send_contact.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td width="16%">Subject</td>
<td width="2%">:</td>
<td width="82%"><input name="subject" type="text" id="subject" size="50"></td>
</tr>
<tr>
<td>Detail</td>
<td>:</td>
<td><textarea name="detail" cols="50" rows="4" id="detail"></textarea></td>
</tr>
<tr>
<td>Name</td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="customer_mail" type="text" id="customer_mail" size="50"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<br />
<td><br /><input type="submit" name="Submit" value="Submit"> <input type="reset" name="clear" value="Clear"></td>
</tr>
</table>
</form>
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
