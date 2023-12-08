<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
         



        <?php
        


        $nums = [15, 4, 18, 23, 10 ];
        // 昇順でソート
        asort($nums);

        echo '昇順にソートします。<br>';
        // ソート後の配列を表示
        
        foreach ($nums as $num) {
            echo $num . '<br>';
        }

        echo '降順にソートします。<br>';
        //降順でソート
        arsort($nums);
        //ソート後の配列を表示
        foreach ($nums as $num) {
            echo $num . '<br>';
        }

        ?>
    </p>
</body>

</html>