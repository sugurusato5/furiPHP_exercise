<?php
var_dump("年齢は？");
$age = trim(fgets(STDIN));
if ($age >= 21) {
    var_dump("21歳以上です");
} elseif ($age == 20) {
    var_dump("成人式ですね、おめでとう！");
} else {
    var_dump("あなたは未成年です");
}