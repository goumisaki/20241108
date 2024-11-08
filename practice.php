<?php

include_once('./p-function.php');

if($_POST){
    $message = $_POST['message'];
    $user = $_POST['user'];
    $gender = $_POST['gender'];
    saveMes($message,$user,$gender);
}

$data = fileLoad();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>一言掲示板</h1>
    <form action="" method="post">
        一言: <input type="text" name="message" id=""><br>
        投稿者: <input type="text" name="user" id=""><br>
        性別: 
        <select name="gender" id="">
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
        </select>
        <br>
        <button type="submit">投稿</button>
    </form>
    <ul>
    <?php  foreach($data as $val){?>
        <li><?php echo $val[0] ?>:<?php echo $val[1]?>
    (<?php if(isset($val[2])){ echo $val[2];} ?>)</li>
    <?php } ?>
    </ul>
</body>
</html>