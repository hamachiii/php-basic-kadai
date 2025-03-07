<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎</title>
</head>
<body>
  <p>
    <?php
    // ここにコードを書いていく
    function sort_2way ($array, $order) {
      if ($order) {
        echo '昇順にソートします。<br>';
        sort ($array);
      } else {
        echo '降順にソートします。<br>';
        rsort($array);
      }
    // 配列を表示する
      foreach ($array as $value) {
      echo $value . '<br>';
     }
    } 

    // ソートする配列を宣言
    $array = [15, 4, 18, 23, 10 ];

    // 昇順でソート
    sort_2way ($array, true);

    echo '<br>';

    // 降順でソート
    sort_2way($array, false);



    ?>
  </p>
  
</body>
</html>