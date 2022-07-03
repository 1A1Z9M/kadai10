<?PHP

$item = $_POST['item'];
$price = $_POST['price'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録内容確認</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">登録内容確認</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<div>
  <form method="post" action="insert.php">
    <div class="input">
      <label>品目*：<input type="itm" name="t_item" value="<?=$item?>" required></label><br>
      <label>セイ*：<input type="price" name="t_price" value="<?=$price?>" required></label><br>
     <button type="submit">内容を確認して登録</button>      
    </div>
  </form>
  <div class="back">
  <button onclick="location.href='registration.php'">戻る</button>
  </div>
</div>
  
</body>
</html>