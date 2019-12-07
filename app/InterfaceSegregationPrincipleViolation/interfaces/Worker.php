<?php

namespace App\InterfaceSegregationPrincipleViolation\Interfaces;

interface Worker {
    public function code();

    public function test();

    public function takeBreak();

    public function callClient();

    public function attendMeetings();

    public function getPaid();
}
