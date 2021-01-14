<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$company   = $_POST["company"];
$brandname  = $_POST["brandname"];
$items    = $_POST["items"];
$comment = $_POST["comment"];


//2. DB接続します
include("funcs_kadai.php");
$pdo = dbcon();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(company,brandname,items,comment,datetime)VALUES(:company,:brandname,:items,:comment,sysdate())");
$stmt->bindValue(':company',   $company,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':brandname',  $brandname,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':items',    $items,    PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$status = $stmt->execute(); //結果：false=エラー

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();    //エラー取得の関数→配列で戻してくれる
  exit("SQLError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index_kadai.php");
  exit();
}
?>
