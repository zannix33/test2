<?php
require "app\Bootstrap\autoloader.php";

use App\Repositories\CalculationRepository as Calculations;
use App\Repositories\OverrideSumRepository as OverrideSum;


$calc = new Calculations();

echo "sum: " . $calc->sum() . "\n";
echo "average: " . $calc->average() . "\n";
echo "Ascending: \n";
var_dump($calc->sort('ASC'));
echo "Descending: \n";
var_dump($calc->sort('DESC'));


$override = New OverrideSum();
echo "Override Sum: \n";
echo $override->sum();
