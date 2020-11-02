<?php require '../header.php' ?>
<h3>upload-output.php</h3>
<?php
  $cfg['ALLOW_MIME'] = ['image/jpeg', 'image/gif', 'image/png'] ;

  function checkMIME($tmp_name) {
    global $cfg;
    $mime = mime_content_type($tmp_name);
    return in_array($mime, $cfg['ALLOW_MIME']);
  }

  if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    if (!file_exists('upload')) {
      mkdir('upload');
    }
    $file='upload/'.basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
      echo $file, 'のアップロードに成功しました。';
      echo '<p><img src="', $file, '"></p>'; 
    } else {
      echo 'アップロードに失敗しました。';
    } } else {
      echo 'ファイルを選択してください。';
    }
?>
<p><a href="upload-input.php" target="_self">戻る</a></p>
<?php require '../footer.php' ?>
