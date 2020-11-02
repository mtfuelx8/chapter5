<?php require '../header.php' ?>
<h3>fgets.php</h3>
<?php
  $file = fopen('sample.txt','r');
  if ($file) {
    while ($line = fgets($file)) {
      echo $line, "<br>\n";
    }
  }
fclose($file);
?>
<p><a href="board-input.php" target="_self">戻る</a></p>
<?php require '../footer.php' ?>
