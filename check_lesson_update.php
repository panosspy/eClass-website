<!--�� ���� �� ������ ��������� ��� ������ update ��� ���� ��� ��� ��������� ��� ����� ��� ��������� �� ����������� �������
������� �� �� ����������-->
<html>
<head>
<title>Update check</title>
</head> 
<body>
	<?php
		$con = mysql_connect("83.212.240.15","it20919","panos91") or die( 'Could not connect to DB: ' . mysql_error() );
		mysql_select_db("it20919", $con) or die (mysql_error());
		//�� ���������� ����� ����� ��� ��� ����� ��� ������������ �������
		$code=$_POST['code'];
		$column=$_POST['column'];
		$new=$_POST['new'];

		$query = "UPDATE lesson SET  $column = '$new' WHERE code='$code'";
		
		$end = mysql_query($query);
	
		if($end==1){
		header("location:update_lesson_success.php");
		}
		else {
		header("location:update_lesson_fail.php");
		}
	?>
</body>
</html>
