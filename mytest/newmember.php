<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" >
		<title>會員資料</title>
	</head>
	<body>
		<form name="form1" method="post" action="addmember.php" enctype="multipart/form-data">
			<p>請輸入會員資料:</p>
			<p>			
			登入帳號:
			<input type="text" name="id" maxlength="20" size="20"><br/>
			登入密碼:
			<input type="password" name="password" maxlength="20" size="30"><br/>
			會員姓名:
			<input type="text" name="name" maxlength="20" size="30"><br/>
			會員電話:
			<input type="text" name="tel" maxlength="20" size="20"><br/>
			會員住址:
			<input type="text" name="address" maxlength="20" size="20"><br/>
			會員照片:
			<input type="file" name="gif" maxlength="20" size="20"><br/>
			
			
			<input type="submit" value="新增">
			<input type="reset" value="重設">
			
			</p>			
		</form>	
	</body>
</html>