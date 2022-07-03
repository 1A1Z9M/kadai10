<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ


$t_item = $_POST['t_item'];
$t_price = $_POST['t_price'];


//2. DB接続します
include("funcs.php");
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("insert into payment_table (item, price, indate) VALUES(:item, :price, sysdate())");
$stmt->bindValue(':item', $t_item, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':price', $t_price, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}else{
  header("Location: complete.php");
  exit();
}
?>
