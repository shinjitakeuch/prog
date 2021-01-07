<?php
$name=$_GET["name"];
$sex=$_GET["sex"];
$age=$_GET["age"];
$adress=$_GET["adress"];
$mail=$_GET["mail"];
?>

<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>

<body>
<table border="1">
    <tr>
        <th>名前</th>
        <th>性別</th>
        <th>年齢</th>
        <th>住所</th>
        <th>アドレス</th>
    </tr>

    >
    <tr>
        <th><?php echo $a[0];?></th>
        <th><?php echo $a[1];?></th>
        <th><?php echo $a[2];?></th>
        <th><?php echo $a[3];?></th>
    </tr>
</table>

<ul>
<li><a href="index.php">index.php</a></li>


</ul>
</body>
</html>