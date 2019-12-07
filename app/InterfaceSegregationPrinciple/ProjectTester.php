<?php

namespace App\InterfaceSegregationPrinciple;

use App\InterfaceSegregationPrinciple\Interfaces\Worker;
use App\InterfaceSegregationPrinciple\Interfaces\Tester;

class ProjectTester implements Worker, Tester {
    // A tester tests new functions on the test environment.
    public function test()
    {
        return "Test: I'm testing on the test server...";
    }

    // A tester is entitled to a break too!
    public function takeBreak()
    {
        return "Break: I'm entitled to this...";
    }

    // A tester does get paid!!
    public function getPaid()
    {
        return "Get Paid: Money, money, money...";
    }
}
