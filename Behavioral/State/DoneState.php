<?php

namespace Behavioral\State;

use Behavioral\State\ArchivedState;

class DoneState extends State
{
    protected StateEnum $state = StateEnum::DONE;

    public function proceed(): void
    {
        $this->transitionTo(new ArchivedState());
    }
}
