<?php  
 //index.php  
 session_start();  
 $_SESSION['user_id'] = (int)1;  
 $connect = mysqli_connect("localhost", "root", "", "members");  
 $query = "  
      SELECT articles.id, articles.title,  
      COUNT(article_likes.id) as likes,  
      GROUP_CONCAT(user.name separator '|') as liked  
      FROM  
      articles  
      LEFT JOIN article_likes  
      ON article_likes.article = articles.id  
      LEFT JOIN user  
      ON article_likes.user = user.id  
      GROUP BY articles.id  
 ";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      echo '<h3>'.$row["title"].'</h3>';  
      echo '<a href="index.php?type=article&id='.$row["id"].'">Like</a>';  
      echo '<p>'.$row["likes"].' People like this</p>';  
      if(count($row["liked"]))  
      {  
           $liked = explode("|", $row["liked"]);  
           echo '<ul>';  
           foreach($liked as $like)  
           {  
                echo '<li>'.$like.'</li>';  
           }  
           echo '</ul>';  
      }  
 }  
 if(isset($_GET["type"], $_GET["id"]))  
 {  
      $type = $_GET["type"];  
      $id = (int)$_GET["id"];  
      if($type == "article")  
      {  
           $query = "  
           INSERT INTO article_likes (user, article)  
           SELECT {$_SESSION['user_id']}, {$id} FROM articles   
                WHERE EXISTS(  
                     SELECT id FROM articles WHERE id = {$id}) AND  
                     NOT EXISTS(  
                          SELECT id FROM article_likes WHERE user = {$_SESSION['user_id']} AND article = {$id})  
                          LIMIT 1  
           ";  
           mysqli_query($connect, $query);  
           header("location:index.php");  
      }  
 }  
 ?>  