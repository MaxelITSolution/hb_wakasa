<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<title>WAKASA / BACKEND</title>
		<link rel="stylesheet" type="text/css" href="asset/css/admin_login_page.css" />
	</head>
	<body>
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<h2 id="title_page">ADMINISTRATOR</h2>
			<hr id="row_1" />
			<hr id="row_2" />
			<form action="backend/login" method="post">
				<input type="text" id="admin_uname" name="admin_uname" placeholder="User Name" />
				<input type="password" id="admin_password" name="admin_password" placeholder="User Password" />
				<button type="submit" id="btn_login" name="btn_login">Log In</button>
			</form>
			<hr id="row_3" />
			<hr id="row_4" />
		</div>
		<div class="col-sm-3"></div>
	</body>
</html>