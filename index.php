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
    <div class="story_header">
        <b class="bold_text">Tin</b>
        <div class="story_archive">
          	<div class="story_archive_icon"></div>
        	Kho lưu trữ của bạn
    	</div>
    </div>
    <div class="story_area">
      <div class="story_preview">
          	<img class="profpic" src="<?php echo $_SESSION['profile_pic'] ?>">
          	<div class="plus_background">
          		<div class="plus_icon"></div>
        	</div>
        	<div class="add_to_story_area">
        		<div class="add_to_story_text_area">
        			<div>Thêm vào<br>tin</div>
        		</div>
        	</div>
        	<div class="story owl-carousel owl-theme" style="position: relative;">
  				<div class="story-item item ninebysixteen" style="background-image:url(https://4.img-dpreview.com/files/p/E~TS590x0~articles/3925134721/0266554465.jpeg);"> 
   					<div class="rounded1"></div>
    				<span>Dương Tùng Anh<span>
    			</div>
  				<div class="story-item item ninebysixteen" style="background-image:url(https://petapixel.com/assets/uploads/2012/02/sample1_mini.jpg);"> 
   	 				<div class="rounded2"></div>
    				<span>Hoàng Phát<span> 
				</div>
				<div class="story-item item ninebysixteen" style="background-image:url(/images/tunganhhai.jpg);"> 
   	 				<div class="rounded3"></div>
    				<span>Nguyễn Đặng Hải<span> 
				</div>
				<div class="story-item item ninebysixteen" style="background-image:url(/images/duongthaovabo.jpg);"> 
   	 				<div class="rounded4"></div>
    				<span>Dương Phương T...<span> 
				</div>
			</div>
      </div>
   	</div>
  	<div class="newsfeed">
  		<div id="post1" class="newsfeed_post">
  			<header class="nf_post_header_area">
				<div class="nf_post_avatar_area">
					<a href="/tunnaduong">
						<i class="nf_post_avatar img" role="img" style="background: #d8dce6 url(/images/tunna.jpg) no-repeat center;background-size: 100% 100%;width: 40px;height: 40px;"></i>
					</a>
				</div>
				<div class="nf_post_header_info">
					<a href="/tunnaduong" class="nf_post_name">Dương Tùng Anh</a><br>
					<a href="/post.php?id=1" class="nf_post_time">1 giờ</a>
					<span class="dot"> · </span>
					<span class="audience_icon"><i class="fas fa-globe-americas"></i></span>
				</div>
  			</header>
  			<div class="nf_post_body_area">
  				<div class="nf_post_caption">
  					<p>Xin chào các cháu đã quay trở lại kênh của bà tân vê lốc</p>
  				</div>
  				<div class="nf_post_image_area">
  					<a href="/post"></a>
  					<img src="/images/batan.jpg" class="nf_post_image">
  				</div>
  			</div>
  			<footer class="nf_post_reaction">
  				<hr>
  				Thích
  				Bình luận
  				<hr>
  			</footer>
  		</div>
  	</div>
  </body>
</html>