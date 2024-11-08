<?php
    include_once('./functions.php')

    if($_POST){
        $fileName = 'data.csv';
        $saveData = [];
        foreach($_POST as $val){
            $saveData[] = $val;

        }
        var_dump($saveData);

        saveCSV($fileName,$saveData);
    }

    $data = loadCSV($fileName);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ブログ</h1>
    <form action="" method="post">
        名前  : <input type="text" name="userName" id=""><br>
        タイトル: <input type="text" name="title" id=""><br>
        内容: <textarea name="body" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">送信</button>
    </form>
    <h2>記事</h2>
    <ul>
    <?php foreach($data as $val){?>
        <li>
            名前: <? php echo $val[0]?>: <?php echo $val[1] ?>
            <p>
                <?php echo $val[2]?>
            </p>
        </li>
    <?php } ?>
    </ul>
</body>
</html>
