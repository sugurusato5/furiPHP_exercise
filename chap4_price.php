<?php

function add($item, $item2, $item3) {
    $sum = $item + $item2 + $item3;
    return $sum;
}

function totalTax($sum) {
    return floor($sum * 1.1);
}

function displayMsg($name, $sum, $price) {
    $msg = <<<EOM
{$name}様
ご注文承りました。
合計{$sum}円です。
{$price}円(税込み)となります。\n
EOM;
    echo $msg;
}