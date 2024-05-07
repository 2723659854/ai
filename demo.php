<?php
require_once __DIR__.'/vendor/autoload.php';
use Phpml\Clustering\DBSCAN;
$samples = [[1, 1], [8, 7], [1, 2], [7, 8], [2, 1], [8, 9]];

$dbscan = new DBSCAN($epsilon = 2, $minSamples = 3);
$res = $dbscan->cluster($samples);
print_r($res);
