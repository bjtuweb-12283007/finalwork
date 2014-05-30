<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
		$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	
	if (!$con)
 	{
		die('Could not connect: ' . mysql_error());
  	}
    
    mysql_select_db(SAE_MYSQL_DB, $con);
		$_title = $_POST["title"];
		$_contents = $_POST["contents"];
		mysql_query("INSERT INTO composition(title, contents) VALUES('$_title', '$_contents')") or die(mysql_error());
		$url = "Luntan.php";
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('发布成功，点击确定查看发帖信息');";
		echo "window.location.href='$url'";
		echo "</script>";	
	?>
        
</body>
</html>