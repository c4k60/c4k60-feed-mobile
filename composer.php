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
      <textarea id="wdyt" placeholder="Bạn đang nghĩ gì?" onkeyup="countChar(this)"></textarea>
    </div>
  <div style="display: none;" id="main">
    <div class="post_style">
      <div class="no_style post_style_div" onclick="blank()"></div>
      <div class="solid_orange post_style_div" onclick="solid_orange()"></div>
      <div class="gradient post_style_div" onclick="gradient()"></div>
      <div class="float post_style_div" onclick="float()"></div>
      <div class="space post_style_div" onclick="space()"></div>
      <div class="love post_style_div" onclick="love()"></div>
      <div class="haha post_style_div" onclick="haha()"></div>
    </div>
    <script type="text/javascript">
      function solid_orange() {
        document.getElementById("wdyt").classList.add("so");
        document.getElementById("wdyt_area").style = "background-color: rgb(255, 99, 35);";
        document.getElementById("wdyt").classList.add("placeholderText");
        document.getElementById("wdyt").classList.remove("spa");
        document.getElementById("wdyt").classList.remove("phWhite");
      }
      function gradient() {
        document.getElementById("wdyt").classList.add("so");
        document.getElementById("wdyt_area").style = "background-image: url(/assets/post_style/gradient.jpg);background-size: 100%;";
        document.getElementById("wdyt").classList.add("placeholderText");
        document.getElementById("wdyt").classList.remove("spa");
        document.getElementById("wdyt").classList.remove("phWhite");
      }
      function float() {
        document.getElementById("wdyt").classList.add("spa");
        document.getElementById("wdyt_area").style = "background-image: url(/assets/post_style/float.png);background-size: 100%;";
        document.getElementById("wdyt").classList.add("phWhite");
      }
      function space() {
        document.getElementById("wdyt").classList.add("spa");
        document.getElementById("wdyt_area").style = "background-image: url(/assets/post_style/space.jpg);background-size: 100%;";
        document.getElementById("wdyt").classList.add("phWhite");
      }
      function love() {
        document.getElementById("wdyt").classList.add("spa");
        document.getElementById("wdyt_area").style = "background-image: url(/assets/post_style/love.jpg);background-size: 100%;";
        document.getElementById("wdyt").classList.add("phWhite");
      }
      function haha() {
        document.getElementById("wdyt").classList.add("so");
        document.getElementById("wdyt_area").style = "background-image: url(/assets/post_style/haha.jpg);background-size: 100%;";
        document.getElementById("wdyt").classList.add("placeholderText");
        document.getElementById("wdyt").classList.remove("spa");
        document.getElementById("wdyt").classList.remove("phWhite");
      }
      function blank() {
        document.getElementById("wdyt").classList.remove("so");
        document.getElementById("wdyt").classList.remove("spa");
        document.getElementById("wdyt").classList.remove("phWhite");
        document.getElementById("wdyt").classList.remove("placeholderText");
        document.getElementById("wdyt_area").style = "";
      }
      function countChar(val) {
        var len = val.value.length;
        if (len > 130) {
          // change to blank style
          blank();
        } else {
          // revert to previous style
        }
      };
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
  </div>
  <center>
    <img src="assets/loaderIcon.gif" id="loader">
  </center>
    <div class="post_button_bottom_area">
      <button class="post_button_bottom">Đăng</button>
    </div>
    <script type="text/javascript">
      function showMain() {
        document.getElementById("main").style.display = "block";
        document.getElementById("loader").style.display = "none";
      }
      setTimeout(showMain , 500);
    </script>
  </body>
</html>