<?php
//0. SESSION開始！！
// session_start();

//１．関数群の読み込み
include("funcs.php");
// sschk();


$id = $_GET["id"]; //?id~**を受け取る

$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM payment_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false) {
    sql_error($stmt);
}else{
    $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="update_admin.php">
  <div class="jumbotron">
   <fieldset>
    <legend>登録情報の編集</legend>
     <label>品目：<input type="text" name="t_item" value="<?=$row["item"]?>"></label><br>
     <label>金額：<input type="text" name="t_price" value="<?=$row["price"]?>">円</label><br>
     <input type="submit" value="更新">
     <button onclick="location.href='select_admin.php'">戻る</button>
     <input type="hidden" name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>