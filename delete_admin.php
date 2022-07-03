<?php
//0. SESSION開始！！
// session_start();

//１．関数群の読み込み
include("funcs.php");
// sschk();
//1. POSTデータ取得
$id = $_GET["id"];

$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM payment_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("select_admin.php");
}
?>
