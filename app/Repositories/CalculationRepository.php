<?php

namespace App\Repositories;

use App\Interfaces\CalculationInterface;
use App\Interfaces\SortOrderInterface;
use App\Interfaces\GenerateNumbersRepository;


class CalculationRepository implements CalculationInterface, SortOrderInterface
{
    public $randomNumbers = [10, 12, 15, 17, 11, 19, 20, 33, 42, 74];

    public function sum()
    {
        $pickedNumbers = array_rand($this->randomNumbers, 2);
        $sumResult = $this->randomNumbers[$pickedNumbers[0]] + $this->randomNumbers[$pickedNumbers[1]];
        return $sumResult;
    }


    public function sort($order='ASC')
    {
        if ($order == 'ASC') {
            asort($this->randomNumbers);
        }
        else {
            arsort($this->randomNumbers);
        }


        return $this->randomNumbers;
    }

    public function average()
    {
        $average = array_sum($this->randomNumbers) / count($this->randomNumbers);
        return $average;
    }
}
