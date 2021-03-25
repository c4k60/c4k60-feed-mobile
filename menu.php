<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: /login');
}
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';
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
    <!-- Moment JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment-with-locales.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/locale/vi.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <title>C4K60 Feed</title>
  </head>
  <body class="noselect" style="background-color: rgb(218, 221, 225);" ontouchstart>
  	<div class="upper_search_box">
  		<i class="fas fa-user-circle" id="profile_icon"></i>
  		<div class="search_box">
        <i class="fas fa-search" id="search_icon"></i>
      Tìm kiếm
      </div>
  		<i class="fas fa-cog" id="setting_icon"></i>
  	</div>
    <div class="navigation_bar">
    	<i class="fas fa-home newsfeed_icon" onclick="location.href='/'"></i>
    	<i class="fas fa-user-friends friends_icon"></i>
    	<i class="fas fa-comment chat_icon"></i>
    	<i class="fas fa-bell noti_icon"></i>
      <div class="menu_icon">
    	  <i class="fas fa-bars menu_icon active"></i>
        <div class="indicator"></div>
      </div>
    </div>
    <div class="menu_content">
      <a href="/<?php echo $_SESSION['username'] ?>">
        <div class="profile_button">
          <img class="profile_pic icon" src="<?php echo $_SESSION['profile_pic'] ?>">
          <div class="profile_name menu_label">Dương Tùng Anh</div>
        </div>
      </a>
      <h3>
        <span class="help_setting">TRỢ GIÚP & CÀI ĐẶT</span>
      </h3>
      <div class="help_and_setting">
        <a href="/language.php">
          <div class="language_button">
            <i class="language_icon icon"></i>
            <div class="language_text menu_label">Ngôn ngữ</div>
          </div>
        </a>
        <a href="/helpcenter">
          <div class="help_center_button">
            <i class="help_center_icon icon"></i>
            <div class="menu_label">Trung tâm trợ giúp</div>
          </div>
        </a>
        <a href="/settings">
          <div class="setting_button">
            <i class="setting_icon icon"></i>
            <div class="menu_label">Cài đặt</div>
          </div>
        </a>
        <a href="/privacy">
          <div class="privacy_button">
            <i class="privacy_icon icon"></i>
            <div class="menu_label">Lối tắt quyền riêng tư</div>
          </div>
        </a>
        <a href="/policies">
          <div class="policy_button">
            <i class="policy_icon icon"></i>
            <div class="menu_label">Điều khoản & chính sách</div>
          </div>
        </a>
        <a href="/bugreport">
          <div class="bug_button">
            <i class="bug_icon icon"></i>
            <div class="menu_label">Báo cáo sự cố</div>
          </div>
        </a>
        <a href="logout.php">
          <div class="logout_button">
            <i class="logout_icon icon"></i>
            <div class="menu_label">Đăng xuất</div>
          </div>
        </a>
      </div>
    </div>
  </body>
</html>