<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
} else {
  header('Location: /');
}
?>
<?php
$error = "";
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	$error = 'Vui lòng điền đầy đủ thông tin vào các trường!';
  $input_user_error = "border: 1px solid #fa3e3e;";
  $input_pass_error = "border: 1px solid #fa3e3e;";
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password, email, name, permission, oauth_provider, profile_pic FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password, $email, $name, $permission, $oauth, $profile_pic);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if (password_verify($_POST['password'], $password)) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
    $_SESSION['permission'] = $permission;
    $_SESSION['oauth'] = $oauth;
    $_SESSION['profile_pic'] = $profile_pic;

		if ($_SESSION['permission'] == 'admin') { // nếu quyền = admin
    header('Location: /'); // chuyển đến trang admin
    
} else {
	header('Location: /'); // còn lại nếu không phải thì chuyển về trang chủ
}
	} else {
		$error = 'Mật khẩu sai. <a href="/register" class="signup_link"><b>Đăng ký tài khoản.</b></a>';
		$input_pass_error = "border: 1px solid #fa3e3e;";
	}
} else {
	$error = 'Tên đăng nhập bạn đã nhập không khớp với bất kỳ tài khoản nào. <a href="/register" class="signup_link"><b>Đăng ký tài khoản.</b></a>';
  $input_user_error = "border: 1px solid #fa3e3e;";
}
$stmt->close();
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
  <div class="error_popup"><?php echo $error ?></div>
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
          <input type="text" name="username" class="input_user" placeholder="Tên đăng nhập" style="<?php echo $input_user_error ?>">
        </div>
        <div class="space_between_inputs"></div>
        <div>
          <input type="password" name="password" class="input_pass" placeholder="Mật khẩu" style="<?php echo $input_pass_error ?>">
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