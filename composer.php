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
    <link rel="stylesheet" href="css/style_composer.css">
    <script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>
    <!-- Moment JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment-with-locales.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/locale/vi.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <title>C4K60 Feed</title>
  </head>
  <body class="noselect" style="background-color: white;" ontouchstart>
  	<div class="upper_back_bar">
      <img class="left_arrow" src="/assets/left-arrow.png" onclick="window.history.back();">
      <div class="create_post_text">Tạo bài viết</div>
      <button type="submit" class="post_button">Đăng</button>
    </div>
    <div class="avatar_audience_bar">
      <img src="<?php echo $_SESSION['profile_pic'] ?>" class="avatar">
      <div class="name_audience">
        <div class="name"><?php echo $_SESSION['name'] ?></div>
        <div class="audience">
          <i class="fas fa-globe-americas"></i> 
          Chia sẻ với: Công khai 
          <i class="fas fa-caret-down"></i>
        </div>
      </div>
    </div>
    <div id="wdyt_area" class="what_do_you_think">
      <textarea id="wdyt" placeholder="Bạn đang nghĩ gì?"></textarea>
    </div>
    <div class="post_style">
      <div class="no_style post_style_div" onclick="blank()"></div>
      <div class="solid_orange post_style_div" onclick="solid_orange()"></div>
      <div class="gradient post_style_div"></div>
      <div class="float post_style_div"></div>
      <div class="space post_style_div"></div>
      <div class="love post_style_div"></div>
      <div class="haha post_style_div"></div>
    </div>
    <script type="text/javascript">
      function solid_orange() {
        document.getElementById("wdyt").classList.add("so");
        document.getElementById("wdyt_area").style = "background-color: rgb(255, 99, 35);";
      }
      function blank() {
        document.getElementById("wdyt").classList.remove("so");
      }
    </script>
    <div class="photo">
      <i class="photo_icon"></i>
      <div class="photo_text">Ảnh</div>
    </div>
    <div class="tag">
      <i class="tag_icon"></i>
      <div class="tag_text">Gắn thẻ bạn bè</div>
    </div>
    <div class="location">
      <i class="location_icon"></i>
      <div class="location_text">Vị trí</div>
    </div>
    <div class="feeling">
      <i class="feeling_icon"></i>
      <div class="feeling_text">Cảm xúc/Hoạt động</div>
    </div>
    <div class="post_button_bottom_area">
      <button class="post_button_bottom">Đăng</button>
    </div>
  </body>
</html>