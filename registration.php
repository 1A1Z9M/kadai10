<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新規会員登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="registration.php">支出を登録</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="confirm.php">
  <div class="jumbotron">
    <legend>品目と金額を入力し、「登録内容確認」を押してください(*は必須項目です)</legend>
    <div class="input">
     <label>品目*：<input type="text" name="item" required></label><br>
     <label>金額*：<input type="text" name="price" required>円</label><br>
     <button type="submit">登録内容確認</button>
    </div>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>