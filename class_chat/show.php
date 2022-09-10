
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>登录查询</title>
<meta http-equiv="refresh" content="20">
</head>
<body>

<h1>人员登录记录</h1>
<a href ="a_clear.php">清空</a>
<?php

	echo file_get_contents("data/login_record.txt");
	
?>


</body>
</html>