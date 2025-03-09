<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
      //  クラスを定義する
      class Food {
        // プロパティを定義する
        private $name;
        private $price;

        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
        // メソッドを定義する
        public function show_price(){
          echo $this->price;
        }

      }

      //クラスを定義する
      class Animal{
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
        // メソッドを定義する
        public function show_height() {
          echo $this->height;
        }
      }  

        // インスタンス化
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, 5000);

        // インスタンス$foodのかくプロパティの値を出力する
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';
        $food->show_price();
        echo '<br>';
        $animal->show_height();

    ?>
  </p>
  
</body>
</html>