<?php
require_once __DIR__ . "/chap4_price.php";

$sum = add($item, $item2, $item3);
$price = totalTax($sum);
displayMsg($name, $sum, $price);