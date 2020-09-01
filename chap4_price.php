<?php
var_dump("お名前は？");
$name = trim(fgets(STDIN));
var_dump("１つ目の金額を入力");
$item = trim(fgets(STDIN));
var_dump("2つ目金額を入力");
$item2 = trim(fgets(STDIN));
var_dump("3つ目の金額を入力");
$item3 = trim(fgets(STDIN));

function add($item, $item2, $item3) {
    $sum = $item + $item2 + $item3;
    return $sum;
}

function totalTax($sum) {
    return floor($sum * 1.1);
}

function displayMsg($name, $sum, $price) {
    $msg =<<< EOM
    {$name}様
    ご注文承りました。
    合計{$sum}円です。
    {$price}円(税込み)となります。\n
    EOM;
    echo $msg;
}