<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(80, 38, 14, 74);
assert(DomainReviewLens::score($item) === 230);
assert(DomainReviewLens::lane($item) === "ship");
