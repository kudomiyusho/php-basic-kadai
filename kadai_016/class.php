<!DOCTYPE html>
<html lang= 'ja'>
<head>
    <meta charset='UTF-8'>
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //クラスを定義
        class Food {
            //プロパティ定義
            public $name;
            public $price;

            //コンストラクタ定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;

            }



            //メソッドを定義
            public function set_name(string $name) {
                $this->name = $name;
            }

            public function show_price() {
                echo $this->price . '<br>';
            }


        }
        
        //インスタンス化
        $potato = new Food('potato', 250);

        // インスタンス$userの各プロパティの値を出力する
        print_r($potato);
        echo '<br>';

        


        


       

        class Animal {
            //プロパティ定義
            public $name;
            public $height;
            public $weight;

            //コンストラクタ定義
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            //メソッドを定義
            public function set_name(string $name) {
                $this->name = $name;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }

        }
        //インスタンス化
        $dog = new Animal('dog', 60, 6000);

        // インスタンス$userの各プロパティの値を出力する
        print_r($dog);
        echo '<br>';



        //メソッドにアクセスして実行
        $potato->set_name('potato');
        $potato->show_price();


        //メソッドにアクセスして実行
        $dog->set_name('dog');
        $dog->show_height();


        ?>




    </p>

</body>
</html>