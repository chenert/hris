<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>

<div id="container">
	<h1>Login</h1>

	<div id="body">
	<?php 
	$this->load->helper('form');
	echo form_open('top/index'); 
	echo "Username: ".form_input('');
	echo "Password: ".form_password('');
	echo form_submit('login', 'Login');
	echo form_close(); ?>
	</div>
</div>

</body>
</html>