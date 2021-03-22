<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';

$post_id = "";
$action = "";

if ($_POST) {
$username = $_SESSION['username'];
$post_id = $_POST['post_id'];
$action = $_POST['action'];

if(!empty($post_id)) {
	switch ($action) {
		case 'like':
			$query = "INSERT IGNORE INTO tintuc_post_likes (username_of_like, liked_post_id) VALUES ('$username','$post_id')";
			$result = mysqli_query($con, $query);
		break;
		
		case 'unlike':
			$query = "DELETE FROM tintuc_post_likes WHERE username_of_like = '$username' AND liked_post_id = '$post_id'";
			$result = mysqli_query($con, $query);
		break;
	}
}
} else {
	echo "What the hell? Did you just found a new easter egg from us?";
	echo "<br><a href='/'>Go back</a>";
}
?>