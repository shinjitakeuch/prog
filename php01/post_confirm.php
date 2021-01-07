<?php
include("inc/funcs.php");

$name = $_POST["name"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$adress = $_POST["adress"];
$mail = $_POST["mail"];
$a = 0;
if($name==""){
        $name = "<span style='color:red;'>未入力";
        $a = 1;
}
if($sex==""){
        $sex = "<span style='color:red;'>未入力";
        $a = 1;
}
if($age==""){
        $age = "<span style='color:red;'>未入力";
        $a = 1;
}
if($adress==""){
        $adress = "<span style='color:red;'>未入力";
        $a = 1;
}
if($mail==""){
        $mail = "<span style='color:red;'>未入力";
        $a = 1;
}

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?= h($name) ?>
性別:<?= h($sex) ?>
年齢：<?= h($age) ?>
住所：<?= h($adress) ?>
EMAIL：<?= h($mail) ?>
<ul>
<?php   
        if($a==1){
                echo'<li><a href="post.php">戻る</a></li>';
        }
?>
<li><a href="post.php"></li>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>