<?php

namespace App\Events;

use App\Dummy;

class DummyEvent
{

    private Dummy $dummy;

    public function __construct(Dummy $dummy)
    {
        $this->dummy = $dummy;
    }

    public function getDummy(): Dummy
    {
        return $this->dummy;
    }
}
