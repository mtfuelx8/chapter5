<?php require '../header.php' ?>
<h3>postcode-output2.php</h3>
<?php
  $postcode = $_POST['postcode'];
  if (preg_match('/^[0-9]{3}-[0-9]{4}$/', $postcode)) {
  echo '郵便番号', $postcode, 'を確認しました。';
  } else {
    echo $postcode ,'は適切な郵便番号ではありません。';
  } ?>
<p><a href="postcode-input2.php" target="_self">戻る</a></p>
<?php require '../footer.php' ?>
