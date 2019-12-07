<?php

namespace App\InterfaceSegregationPrincipleViolation;

use \App\InterfaceSegregationPrincipleViolation\Interfaces\Worker;

class Developer implements Worker {
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

    // A Developer doesn't need to call a client that's the managers job.
    public function callClient()
    {
        return "Call Client: Ahhhhhh! Why do I communicate!";
    }

    // A developer doesn't need to attend meetings with a client (on the most part the manager does that)
    public function attendMeetings()
    {
        return "Meeting: What am I doing here?!";
    }

    // Everyone get paid!
    public function getPaid()
    {
        return "Get Paid: Money, money, money...";
    }
}
