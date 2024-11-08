<?php
    include_once('./functions.php');
    $fileName = 'item.csv'; //load seve どちらでも使えるように
    if($_POST){
        $saveData = [];
        foreach($_POST as $val){
            $saveData[] = $val;
        }
        //書き込み処理
        saveCSV($fileName , $saveData);
    }
    //データの読み込み
    $data = loadCSV($fileName);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>商品管理</h1>
    <form action="" method="post">
        商品名: <input type="text" name="itemName" id=""><br>
        金額: <input type="text" name="itemPrice" id=""><br>
        在庫 <input type="text" name="itemStock" id=""><br>
        <button type="submit">送信</button>
    </form>
    <h2>商品一覧</h2>
    <ul>
    <?php  foreach($data as $val){?>
        <li>
            商品名：<?php echo $val[0] ?><br>
            金額：<?php echo $val[1] ?><br>
            在庫：<?php echo $val[2]?>
        </li>
    <?php } ?>
    </ul>

    h1>生徒一覧</h1>
    <form action="" method="post">
        名前: <input type="text" name="studentName" id=""><br>
        年齢: <input type="text" name="studentAge" id=""><br>
        <select name="studentgender" id="">
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
        </select> <br>
        <button type="submit">送信</button>
    </form>


    <ul>
    <?php  foreach($data as $val){?>
        <li>
            名前：<?php echo $val[0] ?><br>
            年齢：<?php echo $val[1] ?><br>
            性別：<?php echo $val[2]?>
        </li>
    <?php } ?>
    </ul>

</body>
</html>
