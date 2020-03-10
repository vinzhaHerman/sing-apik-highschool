<html>
<head>
	<title>Admin | Login</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/admin_login.css" media="all"/>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<div class="login-container">
	<div class="round-box">
		<div class="title oswalds maroons">LOGIN ::</div>
		<form action="<?php echo base_url('admin/auth'); ?>" method="post">		
			<input type="text" name="username" placeholder="username"><br>
			<input type="password" name="password" placeholder="password"><br>
			<input type="submit" value="Login">
		</form>
	</div>
</div>
<footer style="position: absolute; bottom: 0; right: 0; font-style: italic;" class="serifs whites">copyright 2018 Sing Apik School | All Rights Reserved.</footer>
</body>
</html>