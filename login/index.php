<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
} else {
  header('Location: /');
}
?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
	<link rel="icon" type="image/png" href="/c4k60.png">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>Đăng nhập vào C4K60</title>
  </head>
  <body>
  <div class="content">
  	<div class="login_box">
  		<div class="logo_head">
  			<a href="/login">
  			<img src="/logo_yellow.svg" class="img" alt="c4k60">
  			</a>
  		</div>
  		<div class="form">
  		<form method="post" action="authenticate.php" id="login_form">
  			<div>
  				<input type="text" name="username" id="inputUser" class="input_user" placeholder="Tên đăng nhập">
  			</div>
  			<div class="space_between_inputs"></div>
  			<div>
  				<input type="password" name="password" id="inputPass" class="input_pass" placeholder="Mật khẩu">
  			</div>
  			<div class="div_button">
  				<button type="submit" value="Đăng nhập" name="login" class="login_button">
  					<span class="span1">Đăng nhập</span>
  				</button>
  			</div>
  		</form>
  		</div>
  		<div id="login_reg_separator">
  			<span class="span2">hoặc</span>
  		</div>
  		<div id="signup_button_area">
  			<button onclick="location.href='/register'" id="signup-button">Tạo tài khoản mới</button>
  		</div>
  		<div id="forgot_password_area">
  			<a href="/recover" id="forgot-password-link">Quên mật khẩu?</a>
  		</div>
  		<div id="copyright">
  			<span class="copyright_text">© Fatties Software, Ltd.</span>
  		</div>
  	</div>
  </div>
  </body>
</html>