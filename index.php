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
      <img src="/assets/newsfeed.png" class="newsfeed_icon active">

    </div>
  	<div class="content">

  	</div>
  </body>
</html>