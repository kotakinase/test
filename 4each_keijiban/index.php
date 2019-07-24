<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <?php mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt = $pdo->query("select * from 4each_keijiban");
    ?>
    <header>
    <img src="4eachblog_logo.jpg">
        
    <ul>
        <li>トップ</li>    
        <li>プロフィール</li>    
        <li>4eachについて</li>    
        <li>登録フォーム</li>    
        <li>問い合わせ</li>    
        <li>その他</li>            
    </ul>
    </header>
    
    <main>
     <div class="mainarea">
      <h1>プログラミングに役立つ掲示板</h1>
      <div class="formbox">
      <h2>入力フォーム</h2>
      <form method="post" action="insert.php">
          <div>ハンドルネーム<br>
              <input type="text" name="handlename" size="30"></div>
          <div>タイトル<br>
          <input type="text" name="title" size="30">
          </div>
          <div>コメント<br>
          <textarea name="comments" cols="60" rows="6"></textarea>
          </div>
          <input type="submit" class="send" value="送信する">
      </form></div>
        <?php
        while ($row = $stmt->fetch()) { 
        echo "<div class='toukou'>";
        echo "<h3>".$row['title']."</h3>";
        echo $row['comments'];
        echo "<br>"."<font size='-1'>posted by".$row['handlename']."</font>";
        echo "</div>";
        }
         ?>
        </div>
        <div class="sideber">
            <div class="links">
            <h2>人気の記事</h2>
            <p>PHP オススメ本</p>
            <p>PHP MyAdminの使い方</p>
            <p>今人気のエディタ Top5</p>
            <p>HTMLの基礎</p>
            <p>&nbsp;</p>
            <h2>オススメリンク</h2>
            <p>インターノウス株式会社</p>
            <p>XAMPPのダウンロード</p>
            <p>Eclipseのダウンロード</p>
            <p>Bracketsのダウンロード</p>
            <p>&nbsp;</p>
            <h2>カテゴリ</h2>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySQL</p>
            <p>JavaScript</p>
            </div>
        </div>
    </main>
    
    <footer>
    copyright 🄫 internous
    4each blog is the one which provides A to Z ablot programming.
    </footer>
    
    
    
</body>
</html>    
        