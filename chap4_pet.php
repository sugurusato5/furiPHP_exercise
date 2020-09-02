<?php
function displayMsg($owner) {
    $animal_type = array_unique($owner["animal"]);
    $animal = implode($animal_type);
    $cnt = count($owner["animal"]);
    $msg = <<< EOM
{$owner["name"]}さんは
{$animal}を
{$cnt}匹飼っています。\n
EOM;
echo $msg;
}

