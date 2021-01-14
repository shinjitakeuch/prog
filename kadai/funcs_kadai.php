<?php
//共通に使う関数を記述

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function dbcon(){
    try {
      //Password:MAMP='root',XAMPP=''
      $pdo = new PDO('mysql:dbname=gs_db2;charset=utf8;host=localhost','root','root');
      // $pdo = new PDO('mysql:dbname=gs_db2;charset=utf8;host=localhost','******','******');
      return $pdo;
    } catch (PDOException $e) {
      exit('DBConnectionError:'.$e->getMessage());   //処理をストップ
    }
  }

