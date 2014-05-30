<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
</head>

<body>
	<?php
    $con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	//$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if (!$con)
 	{
		die('Could not connect: ' . mysql_error());
  	}
    
    mysql_select_db(SAE_MYSQL_DB, $con);

	$result = mysql_query("SELECT * FROM users");

 	$login_flag = false;
	while($row = mysql_fetch_array($result))
  	{
		if ($row['name'] == $_POST["name"]  &&   $row['password'] == $_POST["password"])
			$login_flag = true;
  	}
	
	if ($login_flag==true)
	{

		echo "Welcome"."  ".$_POST["name"]; 
		$validname = $_POST["name"];
		echo "
			<SCRIPT language=JavaScript>alert('亲爱的 $validname 用户,登录成功')
			</SCRIPT>";
		echo "<br/>";
		$url = "Luntan.php";
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
	else
	{
		echo "用户名或密码错误";
	}

	mysql_close($con);
?>
</body>
</html>