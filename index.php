<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: /login');
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
    <script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>
    <title>C4K60 Feed</title>
  </head>
  <body style="background-color: rgb(218, 221, 225);">
  	<div class="upper_search_box">
  		<i class="fas fa-user-circle" id="profile_icon"></i>
  		<div class="search_box">
        <i class="fas fa-search" id="search_icon"></i>
      Tìm kiếm
      </div>
  		<i class="fas fa-cog" id="setting_icon"></i>
  	</div>
    <div class="navigation_bar">
      <div class="newsfeed_icon">
    	<i class="fas fa-home newsfeed_icon active"></i>
      <div class="indicator"></div>
      </div>
    	<i class="fas fa-user-friends friends_icon"></i>
    	<i class="fas fa-comment chat_icon"></i>
    	<i class="fas fa-bell noti_icon"></i>
    	<i class="fas fa-bars menu_icon"></i>
    </div>
    <div class="what_do_you_think">
      <img src="<?php echo $_SESSION['profile_pic'] ?>" class="profile_pic_wdyt">
      <div class="wdyt_box">Bạn đang nghĩ gì?</div>
      <div class="wdyt_photo_icon_area">
        <i class="far fa-images wdyt_photo_icon"></i>
        <div class="wdyt_photo_text">Hình ảnh</div>
      </div>
    </div>
    <div class="story_area">
      <div class="story_header">
        <b class="bold_text">Tin</b>
        <div class="story_archive">
          <div class="story_archive_icon"></div>
        Kho lưu trữ tin của bạn
        </div>
      </div>
      <div class="story_preview">
        <div>
          <img class="profpic" src="<?php echo $_SESSION['profile_pic'] ?>">
        </div>
      </div>
    </div>
  	<div class="content">

  	</div>
  </body>
</html>