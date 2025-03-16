<?php
//セッションを開始
session_start();

//POSTリクエストから入力データを取得
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];


//エラーメッセージを格納する配列
$errors = []; //最初はエラーなし

//お名前のバリテーション
if (empty($name)) {
  $errors[] = 'お名前を入力してください。';
}

//メールアドレスのバリテーション
if (empty($age)) {
  $errors[] ='年齢を入力してください。';
}elseif (!is_numeric($age)) {
  $errors[] = '年齢の入力形式が間違っています。';
}


//入力項目に問題がなければセッション・クッキーを保存
if (empty($errors)) {
  //セッション変数を保存
  $_SESSION['name'] = $name;
  $_SESSION['age'] = $age;
  
  //クッキーを登録（有効期限は１時間）
  setcookie('name', $name, time() + 3600);
  setcookie('age', $age, time() + 3600);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h2>入力内容をご確認ください。</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr> 
    <tr>
      <td>社員名</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $age;?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $department;?></td>
    </tr>
  </table>
  
  <p>
  <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
  <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
</body>

</html>