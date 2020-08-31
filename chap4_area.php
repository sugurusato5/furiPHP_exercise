
<?php
function calcArea($top, $bottom, $height) {
    $area = (($top + $bottom) * $height /2);
    return $area;
}

function displayMsg($top, $bottom, $height, $area) {
    $msg = <<< EOM
    台形のサイズ
    上辺 : {$top}
    下辺 : {$bottom}
    高さ : {$height}
    面積 : {$area} \n
    EOM;
    echo $msg;
}
