<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';

$username = $_SESSION['username'];
$post_id = $_POST['post_id']

// Check entry within table
$query = "SELECT COUNT(*) AS countpost FROM tintuc_post_likes WHERE liked_post_id=".$post_id." and username_of_like=".$username;

$result = mysqli_query($con,$query);
$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['countpost'];

if($count == 0){
    $insertquery = "INSERT INTO like_unlike(userid,postid,type) values(".$userid.",".$postid.",".$type.")";
    mysqli_query($con,$insertquery);
}else {
    $updatequery = "DELETE FROM like_unlike SET type=" . $type . " where userid=" . $userid . " and postid=" . $postid;
    mysqli_query($con,$updatequery);
}



?>