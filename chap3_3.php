<?php
foreach (range(1, 100) as $cnt) {
    if ($cnt % 3 == 0 && $cnt % 5 == 0) {
        print_r("FizzBuzz ");
    } elseif ($cnt % 3 == 0) {
        print_r("Fizz ");
    } elseif ($cnt % 5 == 0) {
        print_r("Buzz ");
    } else {
        print_r($cnt . " ");
    }
}