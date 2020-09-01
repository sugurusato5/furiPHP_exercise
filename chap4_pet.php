<?php
function displayMsg($name, $animal, $cnt) {
    $msg = <<< EOM
    {$name}さんは
    {$animal}を
    {$cnt}匹飼っています。\n
    EOM;
    echo $msg;
}

$animal_type = array_unique($owners[0]["animal"]);
$animal = implode($animal_type);
$cnt = count($owners[0]["animal"]);