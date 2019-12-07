<?php

namespace App\InterfaceSegregationPrinciple;

use App\InterfaceSegregationPrinciple\Interfaces\Coder;
use App\InterfaceSegregationPrinciple\Interfaces\Worker;
use App\InterfaceSegregationPrinciple\Interfaces\Tester;

class Developer implements Worker, Coder, Tester {
    // A developer should code.
    public function code()
    {
        return "Code: I'm coding something...";
    }

    // A developer should test their code.
    public function test()
    {
        return "Test: I'm testing my code locally...";
    }

    // Everyone takes a break!
    public function takeBreak()
    {
        return "Break: I'm entitled to this...";
    }

    // Everyone get paid!
    public function getPaid()
    {
        return "Get Paid: Money, money, money...";
    }
}
