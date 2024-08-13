<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    class Food {
      // プロパティの定義
      private $name;
      private $price;
      // コンストラスト

      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
      // メゾット
      public function show_price(){
        echo $this->price. '<br>';
        }
    }

    // インスタンス化する
    $food = new Food('potato',250);
    

    // インスタンス$foodの格プロパティの値を出力する
    print_r($food);
    echo '<br>';
    

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height,string $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      public function show_height() {
        echo $this->height. '<br>';
      }
    }
    $animal = new Animal('dog',60, 5000);
    print_r($animal);
    echo '<br>';

    $food->show_price();
    $animal->show_height();


    ?>
  </p>
</body>
</html>