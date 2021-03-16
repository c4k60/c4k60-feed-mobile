<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: /login');
}
require $_SERVER['DOCUMENT_ROOT'] . '/require/serverconnect.php';
// Converts a number into a short version, eg: 1000 -> 1k
// Based on: http://stackoverflow.com/a/4371114
function number_format_short( $n, $precision = 1 ) {
	if ($n < 900) {
		// 0 - 900
		$n_format = number_format($n, $precision);
		$suffix = '';
	} else if ($n < 900000) {
		// 0.9k-850k
		$n_format = number_format($n / 1000, $precision);
		$suffix = 'K';
	} else if ($n < 900000000) {
		// 0.9m-850m
		$n_format = number_format($n / 1000000, $precision);
		$suffix = 'M';
	} else if ($n < 900000000000) {
		// 0.9b-850b
		$n_format = number_format($n / 1000000000, $precision);
		$suffix = 'B';
	} else {
		// 0.9t+
		$n_format = number_format($n / 1000000000000, $precision);
		$suffix = 'T';
	}

  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
	if ( $precision > 0 ) {
		$dotzero = '.' . str_repeat( '0', $precision );
		$n_format = str_replace( $dotzero, '', $n_format );
	}

	return $n_format . $suffix;
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
    <!-- Moment JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment-with-locales.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/locale/vi.min.js"></script>
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
    <div class="story_shimmer" id="story_shimmer">
    	<div class="story_shimmer_header"></div>
    	<div class="story_shimmer_body_1"></div>
    	<div class="story_shimmer_body_2"></div>
    	<div class="story_shimmer_body_3"></div>
    </div>
    <div class="story_header" id="story_header">
        <b class="bold_text">Tin</b>
        <div class="story_archive">
          	<div class="story_archive_icon"></div>
        	Kho lưu trữ của bạn
    	</div>
    </div>
    <div class="story_area" id="story_area">
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
   	<div class="top_of_newsfeed" id="top_of_newsfeed">
   		<img src="assets/spinner_black.gif" style="width: 20px;">
   		<div class="loading">Đang tải...</div>
   	</div>
  	<div class="newsfeed" id="newsfeed">
<?php
$sql = "SELECT * FROM tintuc_posts ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
?>
<div id="post<?php echo $row['id'] ?>" class="newsfeed_post">
  			<header class="nf_post_header_area">
				<div class="nf_post_avatar_area">
					<a href="/<?php echo $row['username'] ?>">
						<i class="nf_post_avatar img" role="img" style="background: #d8dce6 url(<?php echo $row['avatar'] ?>) no-repeat center;background-size: 100% 100%;width: 40px;height: 40px;"></i>
					</a>
				</div>
				<div class="nf_post_header_info">
					<a href="/<?php echo $row['username'] ?>" class="nf_post_name"><?php echo $row['author'] ?></a><br>
					<a id="post_time<?php echo $row['id']; ?>" href="/post.php?id=<?php echo $row['id'] ?>" class="nf_post_time"></a>
					<script type="text/javascript">
					  document.getElementById('post_time<?php echo $row['id']; ?>').innerHTML = moment('<?php echo $row['timeofpost']; ?>', 'YYYY-MM-DD h:m:s').fromNow();
					</script>
					<span class="dot"> · </span>
					<span class="audience_icon"><i class="fas fa-globe-americas"></i></span>
				</div>
  			</header>
  			<div class="nf_post_body_area">
  				<div class="nf_post_caption">
  					<p><?php echo $row['content'] ?></p>
  				</div>
  				<div class="nf_post_image_area" style="display: <?php echo $row['has_image'] ?>">
  					<img src="<?php echo $row['image'] ?>" class="nf_post_image">
  				</div>
  			</div>
  			<footer class="nf_post_reaction_area">
  				<div class="user_liked" id="user_liked<?php echo $row['id'] ?>" style="display: none;">
  					<span class="fa-stack">
					  <i class="fas fa-circle fa-stack-2x backlike"></i>
					  <i class="fas fa-thumbs-up fa-stack-1x fa-inverse"></i>
					</span>
  					<span id="people_liked<?php echo $row['id'] ?>"><?php echo number_format_short($row['like_count']) ?></span>
  				</div>
  				<hr>
	          	<div class="nf_post_reaction">
	            	<div id="like_area<?php echo $row['id'] ?>" class="nf_post_like" onclick="post<?php echo $row['id'] ?>_like()">
	              		<i id="like<?php echo $row['id'] ?>" class="far fa-thumbs-up react"></i> Thích
	            	</div>
	            	<div class="nf_post_comment">
	              		<i class="far fa-comment react"></i> Bình luận
	            	</div>
	            	<div class="nf_post_share">
	              		<i class="far fa-share-square react"></i> Chia sẻ
	            	</div>
	          	</div>
  			</footer>
        <script type="text/javascript">
          function post<?php echo $row['id'] ?>_like() {
            document.getElementById('like<?php echo $row['id'] ?>').classList.toggle('fas');
            document.getElementById('like_area<?php echo $row['id'] ?>').classList.toggle('liked');
            var x = document.getElementById("people_liked<?php echo $row['id'] ?>");
            var y = document.getElementById("user_liked<?php echo $row['id'] ?>");
            if (x.innerHTML === "0") {
	            if (x.innerHTML === "<?php echo number_format_short($row['like_count']) ?>") {
				   	x.innerHTML = "<?php echo $_SESSION['name'] ?>";
				} else {
				    x.innerHTML = "<?php echo number_format_short($row['like_count']) ?>";
				}
			} else if (x.innerHTML === "<?php echo $_SESSION['name'] ?>") {
				if (x.innerHTML === "<?php echo number_format_short($row['like_count']) ?>") {
				   	x.innerHTML = "<?php echo $_SESSION['name'] ?>";
				} else {
				    x.innerHTML = "<?php echo number_format_short($row['like_count']) ?>";
				}
			} else {
				if (x.innerHTML === "<?php echo number_format_short($row['like_count']) ?>") {
				   	x.innerHTML = "Bạn và <?php echo number_format_short($row['like_count']) ?> người khác";
				} else {
				    x.innerHTML = "<?php echo number_format_short($row['like_count']) ?>";
				}
			}
			if (x.innerHTML === "0") {
				if (y.style.display === "none") {
					y.style.display = "block";
				} else {
					y.style.display = "none";
				}
			} else {
				y.style.display = "block";
			}
          }
          if (document.getElementById("people_liked<?php echo $row['id'] ?>").innerHTML != 0) {
          	document.getElementById("user_liked<?php echo $row['id'] ?>").style.display = "block";
          }
        </script>
  		</div>
<?php
 }
}
?>
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
  					<img src="/images/batan.jpg" class="nf_post_image">
  				</div>
  			</div>
  			<footer class="nf_post_reaction_area">
  				<div class="user_liked">
  					<span class="fa-stack">
					  <i class="fas fa-circle fa-stack-2x backlike"></i>
					  <i class="fas fa-thumbs-up fa-stack-1x fa-inverse"></i>
					</span>
  					<span id="people_liked">3</span>
  				</div>
  				<hr>
	          	<div class="nf_post_reaction">
	            	<div id="like_area" class="nf_post_like" onclick="post1_like()">
	              		<i id="like" class="far fa-thumbs-up react"></i> Thích
	            	</div>
	            	<div class="nf_post_comment">
	              		<i class="far fa-comment react"></i> Bình luận
	            	</div>
	            	<div class="nf_post_share">
	              		<i class="far fa-share-square react"></i> Chia sẻ
	            	</div>
	          	</div>
  			</footer>
        <script type="text/javascript">
          function post1_like() {
            document.getElementById('like').classList.toggle('fas');
            document.getElementById('like_area').classList.toggle('liked');
            var x = document.getElementById("people_liked");
            if (x.innerHTML === "3") {
			    x.innerHTML = "Bạn và 3 người khác";
			  } else {
			    x.innerHTML = "3";
			  }
          }
          function showStory() {
          	document.getElementById('story_shimmer').style.display = "none";
          	document.getElementById('story_header').style.display = "block";
          	document.getElementById('story_area').style.display = "block";
          }
          function showNewsfeed() {
          	document.getElementById('top_of_newsfeed').style.display = "none";
          	document.getElementById('newsfeed').style.display = "block";
          }
          setTimeout(showStory, 500);
          setTimeout(showNewsfeed, 1000);
        </script>
  		</div>
      <center style="margin-bottom: 20px">
        <br>
        <img src="/images/pingpong.png" style="height: 50px;">
        <br>
        <p style="color: grey;font-size: 13px;">Có vẻ như không còn bài viết nào.</p>
      </center>
  	</div>
  </body>
</html>