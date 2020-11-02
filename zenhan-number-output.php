<?php require '../header.php' ?>
<h3>zenhan-number-output.php</h3>
<?php
  $count = mb_convert_kana($_POST['count'], 'n');
  if ( preg_match('/[0-9]+/', $count)) {
  echo $count, '個を購入します。';
  } else {
    echo $count, 'は数値ではありません。';
  }
 ?>
<p><a href="zenhan-number-input.php" target="_self">戻る</a></p>
<?php require '../footer.php' ?>
