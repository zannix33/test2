<?php

namespace App\Repositories;

use App\Repositories\CalculationRepository;


class OverrideSumRepository extends CalculationRepository
{

    public function sum()
    {
        return current($this->randomNumbers) + end($this->randomNumbers);
    }

}
