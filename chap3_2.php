<?php
foreach (range(1, 100) as $int){
    
    if ($int % 3 == 0) {
        print_r("アホ ");
    } else {
        print_r($int . " ");
    }
}