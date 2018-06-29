<!--εμφάνιση πληροφοριακών στοιχείων της πλατφόρμας -->
<!--κλείσιμο του session όταν πατηθεί από την περιοχή μελών -->
<?php
session_start();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>University - E-Lesson platform/About</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css" media="all"> @import "images/style.css";
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
      <h2>About</h2>
      <h3>Platform Information</h3>
     
	<table class="framed" align="left" width="99%">
    	<tbody><tr><td>
    
          <table class="FormData" width="100%">
          <tbody>
          <tr>
            <th width="160">&nbsp;</th>
            <td><b></b></td>
          </tr>
          <tr>
            <th class="left">Platform version:</th>
            	<td>The platform version is:&nbsp;<b>University E-Lesson 4.2</b>&nbsp;&nbsp;
			<ul>
                		<li> Server: fire.dit.hua.gr </li>
              		</ul>
	    	</td>
          </tr>
          <tr>
            <th class="left">Courses:</th>
            	<td>The platform supports as a whole <b>24</b> courses<br />
             		<ul>
                		<li><b>4</b> for each semester</li>
             		</ul>
            	</td>
          </tr>
          <tr>
            <th class="left">Users:</th>
            	<td>The platform has <b>55</b> users
              		<ul>
                		<li><b>15</b> Professors, </li>
                		<li><b>35</b> Students</li>
              		</ul>
		</td>
          </tr>
          <tr>
            <th class="left">In charge of Support:</th>
            <td>Boumpoukiotis Panagiotis & Spyropoulos Panagiotis</td>
          </tr>
          </tbody>
          </table>
          
	</td></tr></tbody></table>	

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
    <div class="padding"> Copyright &copy;University 2012  | Design: Boumpoukiotis & Spyropoulos co. | <a href="http://www.dit.hua.gr/~it20944/contact.php">Contact</a> |  | <a href="http://www.dit.hua.gr/~it20944/login.php">Login</a> </div>
  </div>
</div>
</body>
</html>
