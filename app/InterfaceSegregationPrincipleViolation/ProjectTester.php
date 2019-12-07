<?php

namespace App\InterfaceSegregationPrincipleViolation;

use \App\InterfaceSegregationPrincipleViolation\Interfaces\Worker;

class ProjectTester implements Worker {
    // A tester doesn't code.
    public function code()
    {
        return "Code: I have no idea what I'm doing...";
    }

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

    // A tester doesn't call clients.
    public function callClient()
    {
        return "Call Client: Why am I doing this?";
    }

    // A tester doesn't attend meetings.
    public function attendMeetings()
    {
        return "Meeting: Why am I here? Who is that?";
    }

    // A tester does get paid!!
    public function getPaid()
    {
        return "Get Paid: Money, money, money...";
    }
}
