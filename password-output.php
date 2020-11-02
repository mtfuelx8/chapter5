<?php require '../header.php' ?>
<h3>password-output.php</h3>
<?php
  $password = $_POST['password'];
  if (preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,}/', $password)) {
  echo 'パスワード「', $password, '」を確認しました。';
  } else {
    echo '「', $password ,'」は適切ではありません。';
  } ?>
<p><a href="password-input.php" target="_self">戻る</a></p>
<?php require '../footer.php' ?>
