<?php

namespace App\InterfaceSegregationPrincipleViolation;

use \App\InterfaceSegregationPrincipleViolation\Interfaces\Worker;

class Manager implements Worker {
    // A manager delegates coding to the developers.
    public function code()
    {
        return "Code: I'll get someone in the team to do this...";
    }

    // A manager delegates testing to testers.
    public function test()
    {
        return "Test: I'd rather not...";
    }

    // Everyone is entitled to a break!
    public function takeBreak()
    {
        return "Break: I'm entitled to this...";
    }

    // A manager is client facing so will call a client.
    public function callClient()
    {
        return "Call Client: Hello dear!";
    }

    // A manager will attend meetings.
    public function attendMeetings()
    {
        return "Meeting: Lets discuss...";
    }

    // A manager gets paid too!
    public function getPaid()
    {
        return "Get Paid: Money, money, money...";
    }
}
