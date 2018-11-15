<?php
#タイムゾーンをセット
date_default_timezone_set('Asia/Tokyo');

#GET送信を処理。中身が無いことを明示的にしている。isset関数は、中身が入っているか判断している
$userid = isset($_GET['userid']) ? htmlspecialchars($_GET["userid"], ENT_QUOTES) :  "no userid posted";
$password = isset($_GET['password']) ? htmlspecialchars($_GET["password"], ENT_QUOTES) : "no password posted";

#JSON形式にする
$json_array = array(
    'time' => date("Y-m-d H:i:s"),
    'userId' => $userid,
    'passWord' => $password,
    'userName' => "テスト医師",
    'sectionName' => "内科",
);

#半分おまじない。JSONで送りますよという合図
header("Content-Type: text/javascript; charset=utf-8");
#JSON形式にエンコードしてechoでPOST送信
echo json_encode($json_array);
?>
