<?php require '../header.php' ?>
<h3>board-output.php</h3>
<?php
  $file='board.txt';
  if (file_exists($file)) {
    $board= json_decode(file_get_contents($file));
  }
  $board[]=$_POST['message'];
  file_put_contents($file, json_encode($board));
  foreach ($board as $message) {
    echo '<p>',$message,'</p><hr>';
  }
?>
<p><a href="board-input.php" target="_self">戻る</a></p>
<?php require '../footer.php' ?>
