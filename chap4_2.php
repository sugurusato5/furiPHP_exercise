<?php
require_once __DIR__ . "/chap4_price.php";

var_dump("お名前は？");
$name = trim(fgets(STDIN));

var_dump("１つ目の金額を入力");
$item = trim(fgets(STDIN));

var_dump("2つ目金額を入力");
$item2 = trim(fgets(STDIN));

var_dump("3つ目の金額を入力");
$item3 = trim(fgets(STDIN));

$sum = add($item, $item2, $item3);

$price = totalTax($sum);

displayMsg($name, $sum, $price);