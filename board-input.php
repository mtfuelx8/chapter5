<?php require '../header.php' ?>
<h3>board-input.php</h3>
<p>投稿するメッセージを入力してください。</p>
<form action="board-output.php" method="post">
<input type="text" name="message">
<input type="submit" value="投稿">
</form>  
<?php require '../footer.php' ?>
