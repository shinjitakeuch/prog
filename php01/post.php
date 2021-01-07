<?php
session_start();
?>

<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="write.php" method="post">
	お名前: <input type="text" name="name"><br>
	性別: <input type="text" name="sex"><br>
	年齢: <input type="text" name="age"><br>
	住所: <input type="text" name="adress"><br>
	EMAIL: <input type="text" name="mail"><br>
	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>