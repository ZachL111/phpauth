<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(91, 94, 21, 18, 13);
assert(Policy::score($signal_case_1) === 154);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(99, 90, 19, 16, 11);
assert(Policy::score($signal_case_2) === 176);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(72, 76, 22, 25, 12);
assert(Policy::score($signal_case_3) === 55);
assert(Policy::classify($signal_case_3) === "review");
