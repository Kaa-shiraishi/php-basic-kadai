<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題011</title>
</head>
<body>
<?php
$variable_name=['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];


// 連想配列$variable_nameのキーと値を1つずつ順番に出力する
foreach ($variable_name as $key => $value) {
    echo "{$key}：{$value}<br>";
}
?>
</body>
</html>