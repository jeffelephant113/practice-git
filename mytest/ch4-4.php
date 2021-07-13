<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" >
		<title>主頁</title>
	</head>
	<body>
		<form name="form1" method="get" action="message.php">
			<p>會員登入:<br/>
			
			請輸入帳號:
			<input type="text" name="name" maxlength="20" size="20"><br/>
			請輸入密碼:
			<input type="password" name="password" maxlength="20" size="30"><br/>
			</p>
			備註:<br/>
			<textarea name="note" cols="40" rows="5">
			</textarea>
			<br/>
			
			<input type="submit" value="登入">
			<input type="reset" value="清除">
		</form>
		
	<p>&nbsp</p>	
	<p><a href="newmember.php">註冊</a></p>
	</body>




</html>