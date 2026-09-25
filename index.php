<!DOCTYPE html>
<html>
<head>
  <title>keijiban</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta charset="UTF-8">
  <meta http-equiv="Content-Language" content="ja">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <header>
    <h1>[すみよい掲示板]</h1>
  </header>
  <div class="container">

    <!-- 左側広告 -->
    <div class="ad">
      <p></p>
      <img src="rectangle.png" alt="広告" width="160" height="600">
    </div>

    <div class="content">
    <p>個人情報の書き込みに注意してください。</p>
      <!-- 上部広告 -->
      <div style="text-align: center;">
        <img src="square.png" alt="広告" width="250" height="250">
      </div>

<?php
require_once('db_info.php');
$result = mysqli_query($mysqli, 'select * from comment');

while ($row = mysqli_fetch_assoc($result)) {
  $line1 = '<div class="post"><div class="info">'
         . "<p>{$row['comment_number']} {$row['dt']} {$row['user_id']}</p></div>";

  $line2 = '<div class="comment"><p>'
         . "{$row['text']}"
         . '</p></div></div>';

  echo $line1 . $line2;
}
?>
      <form action="send.php" method="POST">
        <table>
          <tr>
            <td colspan="2">投稿する</td>
          </tr>

          <tr>
            <td>名前:</td>
            <td>
              <input type="text" id="name" name="name" required>
            </td>
          </tr>

          <tr>
            <td>テキスト:</td>
            <td>
              <textarea id="text" name="text" rows="4" cols="40" required></textarea>
            </td>
          </tr>

          <tr>
            <td colspan="2">
              <input type="submit" value="送信">
            </td>
          </tr>
        </table>
      </form>

    </div>

    <!-- 右側広告 -->
    <div class="ad">
      <p></p>
      <img src="rectangle.png" alt="広告" width="160" height="600">
    </div>

  </div>

  <footer>
    <p>© 2023 keijiban</p>
  </footer>

</body>
</html>
