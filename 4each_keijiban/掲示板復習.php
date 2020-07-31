<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>4each掲示板</title>
    <link rel="stylesheet" type="text/css" href="掲示板復習.css">
  </head>
    
  <body>
    <header>
      <img src="4eachblog_logoのコピー.jpg">
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>お問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>
      
    <main>
      <div class="main_left">
        <h1>プログラミングに役立つ掲示板</h1>
        <form action="掲示板復習insert.php" method="post">
          <h3>入力フォーム</h3>
          <p><label>ハンドルネーム<br>
              <input type="text" name="handlename" class="text_box" size="40">
          </label></p>
          <p><label>タイトル<br>
              <input type="text" name="title" class="text_box" size="40">
          </label></p>
          <p><label>コメント<br>
              <textarea cols="60" rows="7" class="comments_box" name="comments"></textarea>
          </label></p>
          <p>
            <input type="submit" class="submit_button" value="投稿する">  
          </p>
        </form>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=PHP復習用;host=localhost;","root","root");
        $stmt = $pdo->query("select * from 4each_keijiban");

        while($row = $stmt->fetch()){
          echo "<div class='post_box'>";
          echo "<h4>".$row['title']."</h4>";
          echo "<div class='contents_box'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo "</div>";
          echo "</div>";
        }
        

        ?>
      </div>  
    </main>
  </body>
</html>