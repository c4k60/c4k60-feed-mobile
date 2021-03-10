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
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error()) ;
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['name'], $_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	die ('Please complete the registration form!') ;
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	die ('Please complete the registration form') 	;
}if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	die ('<div style="font-size: 70px;">Email is not valid!</div>') ;
}
if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
    die ('Username is not valid!') ;
}
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	die ('Password must be between 5 and 20 characters long!');
}
	$name = $_POST['name'];
// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id,  password FROM accounts WHERE  username = ? ')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		$message = 'Tên tài khoản đã tồn tại vui lòng chọn tên khác!';
	} else {
// Username doesnt exists, insert new account
if ($stmt = $con->prepare('INSERT INTO accounts (oauth_provider, oauth_uid, name, username, password, email, profile_pic, date, verified, permission, activation_code, about, location, has_cover, school, live_in, relationship, followers, cover_pic, other_name, highlight_photo, profile_pic_id, cover_pic_id, highlight_pic_id, gender, date_of_birth) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$name = $_POST['name'];
  $profile_p = '/images/default_pic.jpg';
  $date=date("Y-m-d");
  $verified = 'no';
  $permission = 'user';
  $emptyy = '';
  $has_cover = 'none';
  $follower = "0";
  $gender = $_POST['gender'];
  $birthday_day = $_POST['birthday_day'];
  $birthday_month = $_POST['birthday_month'];
  $birthday_year = $_POST['birthday_year'];
  $birthday_day_padded = sprintf("%02d", $birthday_day);
  $birthday_month_padded = sprintf("%02d", $birthday_month);
  $birthday_ts = strtotime("$birthday_year-$birthday_month_padded-$birthday_day_padded");
  $birthday = date("Y-m-d", $birthday_ts);
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('ssssssssssssssssssssssssss', $emptyy,$emptyy,$_POST['name'], $_POST['username'], $password, $_POST['email'], $profile_p, $date, $verified, $permission,$emptyy,$emptyy,$emptyy,$has_cover,$emptyy,$emptyy,$emptyy,$follower,$emptyy,$emptyy,$emptyy,$follower,$follower,$follower, $gender, $birthday);
	$stmt->execute();
	$message = 'Bạn đã đăng ký thành công và đã có thể đăng nhập!';
	echo $birthday;
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	$message = 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	$message = 'Could not prepare statement!';
}
$con->close();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
	<link rel="icon" type="image/png" href="/c4k60.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>
    <title>Tham gia C4K60</title>
  </head>
  <body>
  	<div><?php echo $message ?></div>
  </body>
  </html>