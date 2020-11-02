<?php require '../header.php' ?>
<h3>zenhan-kana-output.php</h3>
<?php
  $furigana = $_POST['furigana'];
  echo 'フリガナは「',mb_convert_kana($furigana), '」です。';
 ?>
<p><a href="zenhan-kana-input.php" target="_self">戻る</a></p>
<?php require '../footer.php' ?>
