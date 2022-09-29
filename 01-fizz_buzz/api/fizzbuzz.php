<?php
header('Content-Type: application/json; charset=utf-8');
$data = array();
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $data[$i] = "FizzBuzz";
    } else if ($i % 3 == 0) {
        $data[$i] = "Fizz";
    } else if ($i % 5 == 0) {
        $data[$i] = "Buzz";
    } else {
        $data[$i] = $i;
    }
}
print_r(json_encode($data));