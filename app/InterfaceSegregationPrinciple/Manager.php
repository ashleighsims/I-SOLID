<?php

namespace App\InterfaceSegregationPrinciple;

use App\InterfaceSegregationPrinciple\Interfaces\ClientFacing;
use \App\InterfaceSegregationPrinciple\Interfaces\Worker;

class Manager implements Worker, ClientFacing {
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
