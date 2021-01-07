<?php
session_start();
?>

<?php
//文字作成
$name = $_POST["name"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$adress = $_POST["adress"];
$mail = $_POST["mail"];
$str = $name.",".$sex.",".$age.",".$adress.",".$mail;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");           // \n改行コード
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>